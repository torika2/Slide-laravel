<?php

namespace App\Http\Controllers\Admin\Software;

use App\Http\Controllers\Admin\Controller;
use App\Models\StaticData\StaticData;
use Illuminate\Http\Request;
use App\Providers\ImageServiceProvider as imageHandle;
use App;
use Gate;
use Response;
use Validator;
use Session;
use App\Models\Software\Software;

class SoftwareController extends Controller
{



    public function index()
    {
        if (Gate::denies('viewSoftware')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = Software::first();

        $staticData = StaticData::where('module','software')->first();
       return view('CMS.Pages.Software.software',compact('data','staticData'));
    }


    public function store(Request $request)
    {
        if (Gate::denies('updateSoftware')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }


        $valid['cover'] = "nullable|image";
        $valid['cover2'] = "nullable|image";

        $locales = getLocales();
        foreach ($locales as $locale) {
            if ($locale->active == 1) {
                $valid['title_' . $locale->locale] = 'required|string';
                $valid['title2_' . $locale->locale] = 'required|string';
                $valid['text1_' . $locale->locale] = 'required|string';
                $valid['text2_' . $locale->locale] = 'required|string';
            }
        }
        request()->validate($valid);

        $data = Software::findOrFail($request->id);



        foreach ($locales as $locale) {
            $data->setTranslation('title',$locale->locale,$request->input('title_' . $locale->locale));
            $data->setTranslation('title2',$locale->locale,$request->input('title2_' . $locale->locale));
            $data->setTranslation('text1',$locale->locale,$request->input('text1_' . $locale->locale));
            $data->setTranslation('text2',$locale->locale,$request->input('text2_' . $locale->locale));
            $data->setTranslation('meta_keywords',$locale->locale,$request->input('meta_keywords_' . $locale->locale));
            $data->setTranslation('meta_description',$locale->locale,$request->input('meta_description_' . $locale->locale));
        }
        $data->save();


        if($request->cover){
            $imageData = [
                'gate'      => 'updateSoftware',
                'data'      => $data,
                'column'    => 'cover',
                'folder'    => 'img',
                'src'       => $request->file('cover'),
                'thumbs'    => [],
                'webp' => true,
            ];
            imageHandle::addImage((object) $imageData);
        }

        if($request->cover2){
            $imageData = [
                'gate'      => 'updateSoftware',
                'data'      => $data,
                'column'    => 'cover2',
                'folder'    => 'img',
                'src'       => $request->file('cover2'),
                'thumbs'    => [],
                'webp' => true,
            ];
            imageHandle::addImage((object) $imageData);
        }

        session()->flash('success', tr('data updated successfully!'));
        return redirect()->back();
    }


}
