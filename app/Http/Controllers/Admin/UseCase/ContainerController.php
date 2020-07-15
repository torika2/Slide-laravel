<?php

namespace App\Http\Controllers\Admin\UseCase;

use App\Http\Controllers\Admin\Controller;
use App\Models\UseCase\Container;
use App\Providers\ImageServiceProvider as imageHandle;
use Illuminate\Http\Request;
use App\Models\UseCase\Industry;
use Gate;
use Illuminate\Support\Str;
use Image;

class ContainerController extends Controller
{

    public function index()
    {
        if (Gate::denies('viewUseCaseContainer')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = Container::orderBy('ord','DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($data)
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('CMS.usecase.container.update',$row->id).'" class="btn btn-success edit"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('CMS.Pages.UseCase.Container.list');
    }


    public function create()
    {
        if (Gate::denies('createUseCaseContainer')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }


        return view('CMS.Pages.UseCase.Container.create');
    }


    public function update($id)
    {
        if (Gate::denies('updateUseCaseContainer')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = Container::findOrFail($id);
        return view('CMS.Pages.UseCase.Container.create',compact('data'));
    }



    public function store(Request $request)
    {
        if ($request->id) {
            if (Gate::denies('updateUseCaseContainer')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }else{
            if (Gate::denies('createUseCaseContainer')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }


        $locales = getLocales();

        if ($request->id){
            $valid['id'] = "required|exists:use_case_container,id";
        }

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['title_' . $loc->locale] = 'required|string';
                $valid['tab_name_' . $loc->locale] = 'required|string';
                $valid['link_' . $loc->locale] = 'required|url';
                $valid['text_' . $loc->locale] = 'required|string';

            }
        }

        request()->validate($valid);

        if ($request->id) {
            $data = Container::find($request->id);
        }else{
            $data = new Container();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('title',$locale->locale,$request->input('title_' . $locale->locale));
            $data->setTranslation('text',$locale->locale,$request->input('text_' . $locale->locale));
            $data->setTranslation('tab_name',$locale->locale,$request->input('tab_name_' . $locale->locale));
            $data->setTranslation('link',$locale->locale,$request->input('link_' . $locale->locale));

        }
        $data->save();

        if($request->cover){
            $imageData = [
                'gate'      => 'updateUseCaseContainer',
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

        return redirect()->route('CMS.usecase.container.list');
    }


    public function delete(Request $request)
    {
        if (Gate::denies('deleteUseCaseContainer')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $data = Container::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id =  $row['id'];
            $ord = $row['position'];
            $data = Container::find($id);
            if ($data){
                $data->update(['ord'=>$ord]);
            }
        }
    }


}
