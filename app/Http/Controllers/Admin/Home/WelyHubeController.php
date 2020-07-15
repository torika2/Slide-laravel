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
use App\Models\Home\WelyHube;

class WelyHubeController extends Controller
{



    public function index()
    {
        if (Gate::denies('viewWelyHube')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = WelyHube::orderBy('ord','DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($data)
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('CMS.home.welyhube.update',$row->id).'
                            " class="btn btn-success edit"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '
                            " class="delete btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('CMS.Pages.Home.WelyHube.list');
    }


    public function create()
    {
        if (Gate::denies('createWelyHube')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }


        return view('CMS.Pages.Home.WelyHube.create');
    }


    public function update($id)
    {
        if (Gate::denies('updateWelyHube')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = WelyHube::findOrFail($id);
        return view('CMS.Pages.Home.WelyHube.create',compact('data'));
    }



    public function store(Request $request)
    {
        if ($request->id) {
            if (Gate::denies('updateWelyHube')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }else{
            if (Gate::denies('createWelyHube')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }


        $locales = getLocales();

        if ($request->id){
            $valid['id'] = "required|exists:wely_hube,id";

        }

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['title_' . $loc->locale] = 'required|string';
                $valid['description_' . $loc->locale] = 'required|string';
                $valid['link_' . $loc->locale] = 'required|url';
            }
        }

        request()->validate($valid);

        if ($request->id) {
            $data = WelyHube::find($request->id);
        }else{
            $data = new WelyHube();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('title',$locale->locale,$request->input('title_' . $locale->locale));
            $data->setTranslation('description',$locale->locale,$request->input('description_' . $locale->locale));
            $data->setTranslation('link',$locale->locale,$request->input('link_' . $locale->locale));
        }
        $data->save();

        if($request->image){
            $imageData = [
                'gate'      => 'updateWelyHube',
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

        return redirect()->route('CMS.home.welyhube.list');
    }


    public function delete(Request $request)
    {
        if (Gate::denies('updateWelyHube')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $data = WelyHube::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id =  $row['id'];
            $ord = $row['position'];
            $data = WelyHube::find($id);
            if ($data){
                $data->update(['ord'=>$ord]);
            }
        }
    }


}
