<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Controllers\Admin\Controller;
use App\Models\Clients\Clients;
use App\Models\Projects\ProjectImages;
use App\Models\Solutions\Solutions;
use App\Models\StaticData\StaticData;
use App\Providers\ImageServiceProvider as imageHandle;
use Illuminate\Http\Request;
use App\Models\Projects\Tags;
use App\Models\Projects\Projects;
use Gate;
use Illuminate\Support\Str;
use Image;

class ProjectsController extends Controller
{

    public function index()
    {
        if (Gate::denies('viewProjects')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = Projects::orderBy('ord','DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($data)
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('CMS.projects.update',$row->id).'" class="btn btn-success edit"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        $staticData = StaticData::where('module','projects')->first();


        return view('CMS.Pages.Projects.list',compact('staticData'));
    }


    public function create()
    {
        if (Gate::denies('createProjects')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $tags = Tags::orderBy('ord','ASC')->get();
        $solutions = Solutions::orderBy('ord','ASC')->get();
        $clients = Clients::orderBy('ord','ASC')->get();
        return view('CMS.Pages.Projects.create',compact('clients','tags','solutions'));
    }


    public function update($id)
    {
        if (Gate::denies('updateProjects')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = Projects::with('images')->findOrFail($id);
        $gallery = $data->images()->orderBy('ord','ASC')->get();
        $tags = Tags::orderBy('ord','ASC')->get();
        $solutions = Solutions::orderBy('ord','ASC')->get();
        $clients = Clients::orderBy('ord','ASC')->get();
        return view('CMS.Pages.Projects.create',compact('data','clients','tags','solutions','gallery'));
    }



    public function store(Request $request)
    {
        if ($request->id) {
            if (Gate::denies('updateProjects')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }else{
            if (Gate::denies('createProjects')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }

        $locales = getLocales();

        if ($request->id){
            $valid['id'] = "required|exists:projects,id";

        }
        $valid['date'] = "required";

        $valid['client_id'] = "required|exists:clients,id";
        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['title_' . $loc->locale] = 'required|string';
                $valid['text_' . $loc->locale] = 'required|string';
            }
        }
        request()->validate($valid);



        if ($request->id) {
            $data = Projects::find($request->id);
        }else{
            $data = new Projects();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('title',$locale->locale,$request->input('title_' . $locale->locale));
            $data->setTranslation('text',$locale->locale,$request->input('text_' . $locale->locale));
            $data->setTranslation('meta_keywords',$locale->locale,$request->input('meta_keywords_' . $locale->locale));
            $data->setTranslation('meta_description',$locale->locale,$request->input('meta_description_' . $locale->locale));
            $data->setTranslation('slug',$locale->locale,str::slug($request->input('title_' . $locale->locale) . ' ' . $data->id));
        }
        $data->date = $request->date;
        $data->client_id = $request->client_id;
        $data->save();

        $data->tags()->sync($request->tags);
        $data->solutions()->sync($request->solutions);


        if($request->cover){
            $imageData = [
                'gate'      => 'updateProjects',
                'data'      => $data,
                'column'    => 'cover',
                'folder'    => 'img',
                'src'       => $request->file('cover'),
                'thumbs'    => [],
                'webp' => true,
            ];
            imageHandle::addImage((object) $imageData);
        }


        if ($request->images) {
            foreach ($request->images as $img) {
                $galleryObj = new ProjectImages();
                $imageData = [
                    'gate' => 'updateProjects',
                    'data' => $galleryObj,
                    'column' => 'image',
                    'folder' => 'img',
                    'src' => $img,
                    'thumbs' => [],
                    'related_column' => 'projects_id',
                    'related_id' => $data->id,
                    'webp'=>true
                ];
                imageHandle::addImages((object)$imageData);
            }
        }





        if ($request->id) {
            session()->flash('success', tr('Data updated successfully!'));
        }else{
            session()->flash('success', tr('Data created successfully!'));
        }

        return redirect()->route('CMS.projects.list');
    }









    public function delete(Request $request)
    {
        if (Gate::denies('deleteProjects')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $data = Projects::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id =  $row['id'];
            $ord = $row['position'];
            $data = Projects::find($id);
            if ($data){
                $data->update(['ord'=>$ord]);
            }
        }
    }


}
