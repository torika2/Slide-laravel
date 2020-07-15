<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Admin\Controller;
use App\Models\Home\SoftwareComponent;
use App\Models\StaticData\StaticData;
use Illuminate\Http\Request;
use App\Providers\ImageServiceProvider as imageHandle;
use App;
use Gate;
use Response;
use Validator;
use Session;
use App\Models\Home\Head;

class SoftController extends Controller
{


    public function update($id)
    {
        if (Gate::denies('updateHomeHead')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = SoftwareComponent::findOrFail(1);
        return view('CMS.Pages.Home.Soft.update',compact('data'));
    }



    public function store(Request $request)
    {
        if (Gate::denies('updateHomeHead')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $locales = getLocales();

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['title_' . $loc->locale] = 'required|string';
                $valid['text_' . $loc->locale] = 'required|string';
                $valid['button1_' . $loc->locale] = 'required|string';
                $valid['link1_' . $loc->locale] = 'required|url';
                $valid['button2_' . $loc->locale] = 'required|string';
                $valid['link2_' . $loc->locale] = 'required|url';
            }
        }

        request()->validate($valid);

        $data = SoftwareComponent::find($request->id);
        foreach ($locales as $locale) {
            $data->setTranslation('title',$locale->locale,$request->input('title_' . $locale->locale));
            $data->setTranslation('text',$locale->locale,$request->input('text_' . $locale->locale));
            $data->setTranslation('link1',$locale->locale,$request->input('link1_' . $locale->locale));
            $data->setTranslation('button1',$locale->locale,$request->input('button1_' . $locale->locale));
            $data->setTranslation('link2',$locale->locale,$request->input('link2_' . $locale->locale));
            $data->setTranslation('button2',$locale->locale,$request->input('button2_' . $locale->locale));
        }
        $data->save();

        if($request->image){
            $imageData = [
                'gate'      => 'updateHomeHead',
                'data'      => $data,
                'column'    => 'image',
                'folder'    => 'img',
                'src'       => $request->file('image'),
                'thumbs'    => [],
                'webp'      => false,
            ];
            imageHandle::addImage((object) $imageData);
        }

        if ($request->id) {
            session()->flash('success', tr('Data updated successfully!'));
        }else{
            session()->flash('success', tr('Data created successfully!'));
        }

        return redirect()->route('CMS.home.soft.update',1);
    }




}
