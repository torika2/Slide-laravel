<?php

namespace App\Http\Controllers\Admin\Solutions;

use App\Http\Controllers\Admin\Controller;
use App\Providers\ImageServiceProvider as imageHandle;
use Illuminate\Http\Request;
use App\Models\Solutions\Solutions;
use Gate;
use Illuminate\Support\Str;
use Image;

class SolutionsController extends Controller
{

    public function index()
    {
        if (Gate::denies('viewSolutions')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = Solutions::orderBy('ord','DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($data)
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('CMS.solutions.update',$row->id).'" class="btn btn-success edit"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('CMS.Pages.Solutions.list');
    }


    public function create()
    {
        if (Gate::denies('createSolutions')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }


        return view('CMS.Pages.Solutions.create');
    }


    public function update($id)
    {
        if (Gate::denies('updateSolutions')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = Solutions::findOrFail($id);
        return view('CMS.Pages.Solutions.create',compact('data'));
    }



    public function store(Request $request)
    {
        if ($request->id) {
            if (Gate::denies('updateSolutions')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }else{
            if (Gate::denies('createSolutions')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }


        $locales = getLocales();

        if ($request->id){
            $valid['id'] = "required|exists:solutions,id";
            $valid['icon'] = "nullable|image";
        }else{
            $valid['icon'] = "required|image";
        }

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['title_' . $loc->locale] = 'required|string';
                $valid['text_' . $loc->locale] = 'required|string';
                $valid['link_' . $loc->locale] = 'nullable|url';

            }
        }

        request()->validate($valid);

        if ($request->id) {
            $data = Solutions::find($request->id);
        }else{
            $data = new Solutions();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('title',$locale->locale,$request->input('title_' . $locale->locale));
            $data->setTranslation('text',$locale->locale,$request->input('text_' . $locale->locale));
            $data->setTranslation('link',$locale->locale,$request->input('link_' . $locale->locale));
        }

        $data->save();

        if($request->icon){
            $imageData = [
                'gate'      => 'updateSolutions',
                'data'      => $data,
                'column'    => 'icon',
                'folder'    => 'img',
                'src'       => $request->file('icon'),
                'thumbs'    => []
            ];
            imageHandle::addImage((object) $imageData);
        }

        if ($request->id) {
            session()->flash('success', tr('Data updated successfully!'));
        }else{
            session()->flash('success', tr('Data created successfully!'));
        }

        return redirect()->route('CMS.solutions.list');
    }









    public function delete(Request $request)
    {
        if (Gate::denies('deleteSolutions')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $data = Solutions::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id =  $row['id'];
            $ord = $row['position'];
            $data = Solutions::find($id);
            if ($data){
                $data->update(['ord'=>$ord]);
            }
        }
    }


}
