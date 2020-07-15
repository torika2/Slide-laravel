<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Admin\Controller;
use App\Models\StaticData\StaticData;
use Illuminate\Http\Request;
use App\Providers\ImageServiceProvider as imageHandle;
use App;
use Gate;
use Response;
use Validator;
use Session;
use App\Models\Home\Head;

class HeadController extends Controller
{


    public function update($id)
    {
        if (Gate::denies('updateHomeHead')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = Head::findOrFail(1);
        return view('CMS.Pages.Home.Head.update',compact('data'));
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
                $valid['description_' . $loc->locale] = 'required|string';
                $valid['button_' . $loc->locale] = 'required|string';
                $valid['link_' . $loc->locale] = 'required|url';
            }
        }

        request()->validate($valid);

        $data = Head::find($request->id);
        foreach ($locales as $locale) {
            $data->setTranslation('title',$locale->locale,$request->input('title_' . $locale->locale));
            $data->setTranslation('description',$locale->locale,$request->input('description_' . $locale->locale));
            $data->setTranslation('link',$locale->locale,$request->input('link_' . $locale->locale));
            $data->setTranslation('button',$locale->locale,$request->input('button_' . $locale->locale));
        }
        $data->video = $request->video;
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

        return redirect()->route('CMS.home.head.update',1);
    }




}
