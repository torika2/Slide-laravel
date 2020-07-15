<?php

namespace App\Http\Controllers\Admin\UseCase;

use App\Http\Controllers\Admin\Controller;
use App\Providers\ImageServiceProvider as imageHandle;
use Illuminate\Http\Request;
use App\Models\UseCase\Industry;
use Gate;
use Illuminate\Support\Str;
use Image;

class IndustryController extends Controller
{

    public function index()
    {
        if (Gate::denies('viewUcIndustry')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = Industry::orderBy('ord','DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($data)
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('CMS.usecase.industry.update',$row->id).'" class="btn btn-success edit"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('CMS.Pages.UseCase.Industry.list');
    }


    public function create()
    {
        if (Gate::denies('createUcIndustry')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }


        return view('CMS.Pages.UseCase.Industry.create');
    }


    public function update($id)
    {
        if (Gate::denies('updateUcIndustry')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = Industry::findOrFail($id);
        return view('CMS.Pages.UseCase.Industry.create',compact('data'));
    }



    public function store(Request $request)
    {
        if ($request->id) {
            if (Gate::denies('updateUcIndustry')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }else{
            if (Gate::denies('createUcIndustry')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }


        $locales = getLocales();

        if ($request->id){
            $valid['id'] = "required|exists:uc_industry,id";
        }

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['name_' . $loc->locale] = 'required|string';
                $valid['text_' . $loc->locale] = 'required|string';

            }
        }

        request()->validate($valid);

        if ($request->id) {
            $data = Industry::find($request->id);
        }else{
            $data = new Industry();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('name',$locale->locale,$request->input('name_' . $locale->locale));
            $data->setTranslation('text',$locale->locale,$request->input('text_' . $locale->locale));
            $data->setTranslation('slug',$locale->locale,str::slug($request->input('name_' . $locale->locale) . ' ' . $data->id));
        }
        $data->save();

        if($request->cover){
            $imageData = [
                'gate'      => 'updateUcIndustry',
                'data'      => $data,
                'column'    => 'cover',
                'folder'    => 'img',
                'src'       => $request->file('cover'),
                'thumbs'    => [],
                'webp' => true,
            ];
            imageHandle::addImage((object) $imageData);
        }


        if ($request->id) {
            session()->flash('success', tr('Data updated successfully!'));
        }else{
            session()->flash('success', tr('Data created successfully!'));
        }

        return redirect()->route('CMS.usecase.industry.list');
    }


    public function delete(Request $request)
    {
        if (Gate::denies('deleteUcIndustry')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $data = Industry::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id =  $row['id'];
            $ord = $row['position'];
            $data = Industry::find($id);
            if ($data){
                $data->update(['ord'=>$ord]);
            }
        }
    }


}
