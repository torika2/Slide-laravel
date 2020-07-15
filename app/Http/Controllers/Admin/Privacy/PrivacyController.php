<?php

namespace App\Http\Controllers\Admin\Privacy;

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

class PrivacyController extends Controller
{


    public function index()
    {
        if (Gate::denies('updatePrivacy')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $privacy = Privacy::find(1);

        $staticData = StaticData::where('module','privacy')->first();

        return view('CMS.Pages.Privacy.privacy',compact('privacy','staticData'));
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

        $data = Privacy::findOrFail(1);

        foreach ($locales as $locale) {
            $data->setTranslation('title',$locale->locale,$request->input('title_' . $locale->locale));
            $data->setTranslation('text',$locale->locale,$request->input('text_' . $locale->locale));
        }
        $data->save();



        session()->flash('success', tr('Privacy Policy updated successfully!'));
        return redirect()->back();
    }


}
