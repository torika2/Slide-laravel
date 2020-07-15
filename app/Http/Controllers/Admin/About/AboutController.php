<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Admin\Controller;
use Illuminate\Http\Request;
use App\Providers\ImageServiceProvider as imageHandle;
use App;
use Gate;
use Response;
use Validator;
use Session;
use App\Models\About\About;

class AboutController extends Controller
{

    /*public $links;
    public $module;
    public $viewPath = 'News';
    public $folderName = 'news';
    private $gateSuffix = 'News';

    public function __construct()
    {
        $links = [
            'list' => 'CMS.news.index',
            'create' => 'CMS.news.create',
            'store' => 'CMS.news.store',
            'edit' => 'CMS.news.edit',
            'update' => 'CMS.news.update',
            'delete' => 'CMS.news.delete',
        ];
        $this->module = 'News';
        $this->links = (object) $links;
    }*/

    public function index()
    {
        if (Gate::denies('viewAbout')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $about = About::first();

       return view('CMS.Pages.About.about',compact('about'));
    }
    public function store(Request $request)
    {
        if (Gate::denies('updateAbout')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }


        $valid['image'] = "nullable|image";
        if ($request->file('video')){
            $valid['video'] = "nullable|mimes:mp4";
        }


        $locales = getLocales();
        foreach ($locales as $locale) {
            if ($locale->active == 1) {
                $valid['h1_' . $locale->locale] = 'required|string';
                $valid['title_' . $locale->locale] = 'required|string';
                $valid['text_' . $locale->locale] = 'required|string';
                $valid['quote_' . $locale->locale] = 'required|string';
            }
        }
        request()->validate($valid);

        $data = About::findOrFail($request->id);

        if ($request->file('video')){
            $file = $request->file('video');
            $filename = rand() . date('H-i-s'). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('files/video'), $filename);
            $data->video = $filename;

        }
        if ($request->video){
            if (!$request->file('video')){

                $data->video = $request->video;
            }
        }

        foreach ($locales as $locale) {
            $data->setTranslation('h1',$locale->locale,$request->input('h1_' . $locale->locale));
            $data->setTranslation('title',$locale->locale,$request->input('title_' . $locale->locale));
            $data->setTranslation('text',$locale->locale,$request->input('text_' . $locale->locale));
            $data->setTranslation('quote',$locale->locale,$request->input('quote_' . $locale->locale));
        }
        $data->save();




        if($request->image){
            $imageData = [
                'gate'      => 'updateAbout',
                'data'      => $data,
                'column'    => 'image',
                'folder'    => 'img',
                'src'       => $request->file('image'),
                'thumbs'    => [['width' => 768]],
                'webp' => true,
            ];
            imageHandle::addImage((object) $imageData);
        }

        session()->flash('success', tr('About updated successfully!'));
        return redirect()->back();
    }


}
