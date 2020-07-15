<?php

namespace App\Http\Controllers\Admin\Languages\Translations;

use App\Http\Controllers\Admin\Controller;
use App\Models\Languages\Words;
use Illuminate\Http\Request;
use App;
use Gate;

class TranslationsController extends Controller
{

    public function index()
    {
        if (Gate::denies('viewTranslation')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $keyword = null;
        if (request('search')) {
            $keyword = request('search');
        }
        $query = Words::query();
        $query->where('key','LIKE', '%' . $keyword . '%');

        foreach (getLocales() as $locale) {
            $query->orWhere(function ($query) use($keyword,$locale){
                return $query->where('value->'.$locale->locale , 'LIKE', '%' . $keyword . '%');
            });
        }


        $words = $query->orderBy('id', 'DESC')->paginate(20);
        return view('CMS.Pages.Languages.translations', compact('words'));
    }


    public function create(Request $request)
    {
        if (Gate::denies('createTranslation')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $valid = [
            'key' => 'required|string|unique:words',
        ];
        foreach (getLocales() as $locale) {
            if ($locale->active == 1) {
                $valid['value_' . $locale->locale] = 'required|string';
            }
        }
        request()->validate($valid);
        $word = Words::create([
            'key' => strtolower($request->key)
        ]);
        foreach (getLocales() as $locale) {
            if (!empty($request->input('value_' . $locale->locale))) {
               $word->setTranslation('value',$locale->locale,$request->input('value_' . $locale->locale));
            }
        }
        $word->save();
        if ($word) {
            session()->flash('success', tr('translation created successfully'));
            return redirect()->back();
        } else {
            session()->flash('error', 'error');
            return redirect()->back();
        }
    }

    public function delete(Request $request)
    {
        if (Gate::denies('deleteTranslation')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $word = $word = Words::where('key', $request->key)->delete();
        if ($word) {
            session()->flash('success', tr('translation deleted successfully'));
            return redirect()->back();
        } else {
            session()->flash('error', 'error');
            return redirect()->back();
        }
    }

    public function getAllTranslation(Request $request)
    {
        if (Gate::denies('updateTranslation')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $word = Words::where('key', $request->key)->first();
        return $word;
    }

    public function update(Request $request)
    {
        if (Gate::denies('updateTranslation')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $valid = ['key' => 'required|string|exists:words,key',];
        foreach (getLocales() as $locale) {
            if ($locale->active == 1) {
                $valid['value_' . $locale->locale] = 'required|string';
            }
        }
        request()->validate($valid);



        $word = Words::where('key', $request->key)->first(); //
        foreach (getLocales() as $locale) {
            if (!empty($request->input('value_'.$locale->locale))) {
                $word->setTranslation('value',$locale->locale,$request->input('value_' . $locale->locale));

            }
        }
        $word->save();
        if ($word) {
            session()->flash('success', tr('translation updated successfully'));
            return redirect()->back();
        } else {
            session()->flash('error', 'error');
            return redirect()->back();
        }
    }
}
