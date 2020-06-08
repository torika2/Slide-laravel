<?php

namespace App\Http\Controllers\Admin\Languages;

use App\Http\Controllers\Admin\Controller;
use App\Models\Languages\Locales;
use Illuminate\Http\Request;
use App;
use Gate;
use Response;
use Validator;
use Session;

class LanguagesController extends Controller
{

    public function index()
    {
        if (Gate::denies('viewLanguage')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $languages = Locales::orderBy('default', 'DESC')->orderBy('active', 'DESC')->get();
        return view('CMS.Pages.Languages.languages', compact('languages'));
    }

    public function updateStatus(Request $request)
    {
        if (Gate::denies('updateLanguage')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $valid = [
            'id' => 'required|integer|exists:locales',
            'status' => 'required|integer',
        ];
        $validator = Validator::make($request->all(), $valid)->validate();
        $language = Locales::findOrFail($request->id);
        $language->update(['active' => $request->status]);
        return $language;
    }

    public function default(Request $request)
    {
        if (Gate::denies('updateLanguage')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $valid = [
            'id' => 'required|integer|exists:locales',
            'status' => 'required|integer',
        ];
        $validator = Validator::make($request->all(), $valid)->validate();
        $default = Locales::where('default', 1)->first();
        $language = Locales::findOrFail($request->id);

        if ($language->active == 1) {
            if ($language->default == 0) {
                $default->update(['default' => 0]);
                return $language->update(['default' => $request->status]);
            } else {
                return Response::json(array(
                    'success' => false,
                    'errors' => [
                        'error' => [tr('cant disable default, if you need please choose other language as default!')]
                    ]
                ), 400);
            }
        } else {
            return Response::json(array(
                'success' => false,
                'errors' => ['error' => [tr('please enable this language before make it default!')]]
            ), 400);
        }
    }

    public function create(Request $request)
    {
        if (Gate::denies('createLanguage')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $valid = [
            'locale' => 'required|string|unique:locales',
            'name' => 'required|string',
        ];
        $request->validate($valid);

        $data = [
            'name' => $request->name,
            'locale' => $request->input('locale'),
            'default' => 0,
            'active' => 0
        ];
        $language = Locales::create($data);

        if ($language) {
            session()->flash('success', tr('language created successfully'));
            return redirect()->back();
        } else {
            session()->flash('error', 'error');
            return redirect()->back();
        }
    }

    public function language(Request $request)
    {
        $language = Locales::findOrFail($request->id);
        return $language;
    }

    public function update(Request $request)
    {
        if (Gate::denies('updateLanguage')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $valid = [
            'name' => 'required|string',
        ];
        $valid['locale'] = 'required|string|unique:locales,locale,' . $request->id;
        $request->validate($valid);

        $language = Locales::findOrFail($request->id);
        $language->update([
            'name' => $request->name,
            'locale' => $request->input('locale'),
        ]);
        if ($language) {
            session()->flash('success', tr('language updated successfully'));
            return redirect()->back();
        } else {
            session()->flash('error', 'error');
            return redirect()->back();
        }
    }

    public function delete(Request $request)
    {
        if (Gate::denies('deleteLanguage')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $language = Locales::findOrFail($request->id);
        if ($language->default == 0) {
            $result = $language->delete();
            if ($result) {
                session()->flash('success', tr('language deleted successfully'));
                return redirect()->back();
            } else {
                session()->flash('error', 'error');
                return redirect()->back();
            }
        } else {
            session()->flash('error', tr('you cant delete default lanugage'));
            return redirect()->back();
        }
    }

    public function setLocale($locale)
    {
        $locales = Locales::get();
        $locales = $locales->where('locale', $locale)->where('active', 1)->first();
        if ($locales) {
            session()->put('admin_locale', $locale);
        }
        return redirect()->back();
    }
}
