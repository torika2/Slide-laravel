<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Admin\Controller;
use Illuminate\Http\Request;
use App\Providers\ImageServiceProvider as imageHandle;
use App;
use Gate;
use Response;
use Validator;
use Session;
use App\Models\Home\Advantage;
use App\Models\Home\AdvantageStatic;

class AdvantageController extends Controller
{

    public function update($id)
    {
        if (Gate::denies('updateAdvantage')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = AdvantageStatic::findOrFail($id);
        return view('CMS.Pages.Home.Advantage.update',compact('data'));
    }



    public function store(Request $request)
    {
        if ($request->id) {
            if (Gate::denies('updateAdvantage')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }else{
            if (Gate::denies('createAdvantage')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }

        $locales = getLocales();

        $valid['image1'] = 'nullable|image';
        $valid['image2' ] = 'nullable|image';
        $valid['image3'] = 'nullable|image';

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['button_' . $loc->locale] = 'required|string';
                $valid['link_' . $loc->locale] = 'required|url';
            }
        }

        request()->validate($valid);

        $data = AdvantageStatic::find(1);
        foreach ($locales as $locale) {
            $data->setTranslation('button',$locale->locale,$request->input('button_' . $locale->locale));
            $data->setTranslation('link',$locale->locale,$request->input('link_' . $locale->locale));
        }
        $data->save();

        if($request->image1){
            $imageData = [
                'gate'      => 'updateAdvantage',
                'data'      => $data,
                'column'    => 'image1',
                'folder'    => 'img',
                'src'       => $request->file('image1'),
                'thumbs'    => [],
                'webp'      => false,
            ];
            imageHandle::addImage((object) $imageData);
        }

        if($request->image2){
            $imageData = [
                'gate'      => 'updateAdvantage',
                'data'      => $data,
                'column'    => 'image2',
                'folder'    => 'img',
                'src'       => $request->file('image2'),
                'thumbs'    => [],
                'webp'      => false,
            ];
            imageHandle::addImage((object) $imageData);
        }


        if($request->image3){
            $imageData = [
                'gate'      => 'updateAdvantage',
                'data'      => $data,
                'column'    => 'image3',
                'folder'    => 'img',
                'src'       => $request->file('image3'),
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

        return redirect()->route('CMS.home.advantage.update',1);
    }








    public function listData()
    {
        if (Gate::denies('viewAdvantage')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = Advantage::orderBy('ord','DESC')->get();
        if (request()->ajax()) {
            return datatables()->collection($data)
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('CMS.home.advantage.data.update',$row->id).'
                            " class="btn btn-success edit"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '
                            " class="delete btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

    }





    public function createData()
    {
        if (Gate::denies('createAdvantage')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }


        return view('CMS.Pages.Home.Advantage.create');
    }


    public function updateData($id)
    {
        if (Gate::denies('updateAdvantage')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = Advantage::findOrFail($id);
        return view('CMS.Pages.Home.Advantage.create',compact('data'));
    }



    public function storeData(Request $request)
    {
        if ($request->id) {
            if (Gate::denies('updateAdvantage')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }else{
            if (Gate::denies('createAdvantage')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }


        $locales = getLocales();

        if ($request->id){
            $valid['id'] = "required|exists:advantage,id";

        }

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['title_' . $loc->locale] = 'required|string';
                $valid['description_' . $loc->locale] = 'required|string';
            }
        }

        request()->validate($valid);

        if ($request->id) {
            $data = Advantage::find($request->id);
        }else{
            $data = new Advantage();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('title',$locale->locale,$request->input('title_' . $locale->locale));
            $data->setTranslation('description',$locale->locale,$request->input('description_' . $locale->locale));
        }
        $data->save();



        if ($request->id) {
            session()->flash('success', tr('Data updated successfully!'));
        }else{
            session()->flash('success', tr('Data created successfully!'));
        }

        return redirect()->route('CMS.home.advantage.update',1);
    }





    public function deleteData(Request $request)
    {
        if (Gate::denies('updateAdvantage')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $data = Advantage::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function reOrderData(Request $request)
    {
        foreach ($request->rows as $row) {
            $id =  $row['id'];
            $ord = $row['position'];
            $data = Advantage::find($id);
            if ($data){
                $data->update(['ord'=>$ord]);
            }
        }
    }






}
