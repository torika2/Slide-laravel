<?php

namespace App\Http\Controllers\Admin\Terms;

use App\Http\Controllers\Admin\Controller;
use App\Models\StaticData\StaticData;
use Illuminate\Http\Request;
use App\Providers\ImageServiceProvider as imageHandle;
use App;
use Gate;
use Response;
use Validator;
use Session;
use App\Models\Privacy\Privacy;

class TermsController extends Controller
{


    public function index()
    {
        if (Gate::denies('updatePrivacy')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $terms = Privacy::find(2);
        $staticData = StaticData::where('module','terms')->first();

       return view('CMS.Pages.Terms.terms',compact('terms','staticData'));
    }
    public function store(Request $request)
    {
        if (Gate::denies('updateAbout')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }


        $locales = getLocales();
        foreach ($locales as $locale) {
            if ($locale->active == 1) {
                $valid['title_' . $locale->locale] = 'required|string';
                $valid['text_' . $locale->locale] = 'required|string';
            }
        }
        request()->validate($valid);

        $data = Privacy::findOrFail(2);

        foreach ($locales as $locale) {
            $data->setTranslation('title',$locale->locale,$request->input('title_' . $locale->locale));
            $data->setTranslation('text',$locale->locale,$request->input('text_' . $locale->locale));
        }
        $data->save();



        session()->flash('success', tr('Term and Conditions updated successfully!'));
        return redirect()->back();
    }


}
