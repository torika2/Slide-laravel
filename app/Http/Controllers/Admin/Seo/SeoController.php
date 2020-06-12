<?php

namespace App\Http\Controllers\Admin\Seo;

use App\Http\Controllers\Admin\Controller;
use App\Providers\ImageServiceProvider as imageHandle;
use Illuminate\Http\Request;
use App\Models\Seo\Seo;
use Gate;

class SeoController extends Controller
{
    public $links;
    public $module = "Seo";
    public $viewPath = 'Seo';
    private $gateSuffix = 'Seo';

    public function __construct()
    {
        $links = [
            'list' => 'CMS.seo.index',
            'edit' => 'CMS.seo.edit',
            'update' => 'CMS.seo.update'
        ];
        $this->links = (object) $links;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('view'.$this->gateSuffix)) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $query = Seo::query();
        $query->orderBy('id', 'DESC');

        $data = $query->get();
        $module = $this->module;
        $links = $this->links;
        $gateSuffix = $this->gateSuffix;
        return view('CMS.Pages.'.$this->viewPath.'.list',
            compact('data', 'module', 'links', 'gateSuffix'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::denies('update'.$this->gateSuffix)) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = Seo::findOrFail($id);
        $module = $this->module;
        $links = $this->links;
        $home = Seo::where('module', 'home')->first();

        return view('CMS.Pages.'.$this->viewPath.'.update',
            compact('data', 'module', 'links', 'home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Gate::denies('update'.$this->gateSuffix)) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $valid = [
            'image' => 'nullable|image',
        ];
        $locales = getLocales();
        foreach ($locales as $locale) {
            if ($locale->active == 1) {
                $valid['title_' . $locale->locale] = 'required|string';
                $valid['meta_keywords_' . $locale->locale] = 'nullable|string';
                $valid['meta_description_' . $locale->locale] = 'required|string';
            }
        }
        request()->validate($valid);

        $data = Seo::findOrFail($id);

        foreach ($locales as $locale) {
            if (!empty($request->input('title_' . $locale->locale))) {

                $data->setTranslation('title',$locale->locale,$request->input('title_' . $locale->locale));
                $data->setTranslation('meta_keywords',$locale->locale,$request->input('meta_keywords_' . $locale->locale));
                $data->setTranslation('meta_description',$locale->locale,$request->input('meta_description_' . $locale->locale));
            }
        }
        $data->save();

        foreach ($locales as $loc){
            if($request->file('image_'.$loc->locale)){
                $imageData = [
                    'gate'      => 'update'.$this->gateSuffix,
                    'data'      => $data,
                    'column'    => 'image',
                    'folder'    => 'img',
                    'src'       => $request->file('image_'.$loc->locale),
                    'thumbs'    => [],
                    'locale'    => $loc->locale,
                ];
                imageHandle::addImage((object) $imageData);
            }
        }




        if ($data) {
            session()->flash('success', tr('data updated successfully'));
            return redirect()->route($this->links->list);
        } else {
            session()->flash('error', 'error');
            return redirect()->route($this->links->list);
        }
    }
}
