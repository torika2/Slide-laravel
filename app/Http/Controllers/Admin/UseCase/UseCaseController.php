<?php

namespace App\Http\Controllers\Admin\UseCase;

use App\Http\Controllers\Admin\Controller;
use App\Models\Clients\Clients;
use App\Models\Solutions\Solutions;
use App\Models\StaticData\StaticData;
use App\Models\UseCase\Industry;
use App\Providers\ImageServiceProvider as imageHandle;
use Illuminate\Http\Request;
use App\Models\UseCase\UseCases;
use Gate;
use Illuminate\Support\Str;
use Image;

class UseCaseController extends Controller
{

    public function index()
    {
        if (Gate::denies('viewUseCases')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = UseCases::orderBy('ord','DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($data)
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('CMS.usecase.update',$row->id).'" class="btn btn-success edit"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        $staticData = StaticData::where('module','usecase')->first();
        return view('CMS.Pages.UseCase.list',compact('staticData'));
    }


    public function create()
    {
        if (Gate::denies('createUseCases')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $solutions = Solutions::orderBy('ord','ASC')->get();
        $clients = Clients::orderBy('ord','ASC')->get();
        $industries = Industry::orderBy('ord','ASC')->get();
        return view('CMS.Pages.UseCase.create',compact('clients','solutions','industries'));
    }


    public function update($id)
    {
        if (Gate::denies('updateUseCases')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = UseCases::with('solutions','industry','client')->findOrFail($id);
        $solutions = Solutions::orderBy('ord','ASC')->get();
        $clients = Clients::orderBy('ord','ASC')->get();
        $industries = Industry::orderBy('ord','ASC')->get();

        return view('CMS.Pages.UseCase.create',compact('data','clients','solutions','industries'));
    }



    public function store(Request $request)
    {
        if ($request->id) {
            if (Gate::denies('updateUseCases')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }else{
            if (Gate::denies('createUseCases')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }


        $locales = getLocales();

        if ($request->id){
            $valid['id'] = "required|exists:use_cases,id";
            $valid['cover'] = "nullable|image";
            $valid['banner'] = "nullable|image";
        }else{
            $valid['cover'] = "required|image";
            $valid['banner'] = "required|image";
        }

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['title_' . $loc->locale] = 'required|string';
                $valid['text_' . $loc->locale] = 'required|string';
                $valid['short_text_' . $loc->locale] = 'required|string';

            }
        }
        $valid['client_id'] = "required|exists:clients,id";
        $valid['industry_id'] = "required|exists:uc_industry,id";
        $valid['video'] = "nullable|url";


        request()->validate($valid);

        if ($request->id) {
            $data = UseCases::find($request->id);
        }else{
            $data = new UseCases();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('title',$locale->locale,$request->input('title_' . $locale->locale));
            $data->setTranslation('text',$locale->locale,$request->input('text_' . $locale->locale));
            $data->setTranslation('meta_keywords',$locale->locale,$request->input('meta_keywords_' . $locale->locale));
            $data->setTranslation('meta_description',$locale->locale,$request->input('meta_description_' . $locale->locale));
            $data->setTranslation('short_text',$locale->locale,$request->input('short_text_' . $locale->locale));
            $data->setTranslation('slug',$locale->locale,str::slug($request->input('title_' . $locale->locale) . ' ' . $data->id));
        }
        $data->client_id = $request->client_id;
        $data->industry_id = $request->industry_id;
        $data->video = $request->video;
        $data->save();

        if($request->cover){
            $imageData = [
                'gate'      => 'updateUseCases',
                'data'      => $data,
                'column'    => 'cover',
                'folder'    => 'img',
                'src'       => $request->file('cover'),
                'thumbs'    => [],
                'webp' => true,
            ];
            imageHandle::addImage((object) $imageData);
        }

        if($request->banner){
            $imageData = [
                'gate'      => 'updateUseCases',
                'data'      => $data,
                'column'    => 'banner',
                'folder'    => 'img',
                'src'       => $request->file('banner'),
                'thumbs'    => [],
                'webp' => true,
            ];
            imageHandle::addImage((object) $imageData);
        }

        $data->solutions()->sync($request->solutions);


        if ($request->id) {
            session()->flash('success', tr('Data updated successfully!'));
        }else{
            session()->flash('success', tr('Data created successfully!'));
        }

        return redirect()->route('CMS.usecase.list');
    }


    public function delete(Request $request)
    {
        if (Gate::denies('deleteUseCases')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $data = UseCases::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id =  $row['id'];
            $ord = $row['position'];
            $data = UseCases::find($id);
            if ($data){
                $data->update(['ord'=>$ord]);
            }
        }
    }


}
