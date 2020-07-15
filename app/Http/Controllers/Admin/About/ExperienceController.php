<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Admin\Controller;
use App\Providers\ImageServiceProvider as imageHandle;
use Illuminate\Http\Request;
use App\Models\About\Experience;
use Gate;
use Illuminate\Support\Str;
use Image;

class ExperienceController extends Controller
{

    public function index()
    {
        if (Gate::denies('viewExperience')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $experience = Experience::orderBy('ord','DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($experience)
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('CMS.experience.update',$row->id).'" class="btn btn-success edit-experience"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete-experience btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('CMS.Pages.About.experience.experience');
    }


    public function create()
    {
        if (Gate::denies('createExperience')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }


        return view('CMS.Pages.About.experience.create');
    }


    public function update($id)
    {
        if (Gate::denies('updateExperience')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $experience = Experience::findOrFail($id);
        return view('CMS.Pages.About.experience.create',compact('experience'));
    }



    public function store(Request $request)
    {
        if ($request->id) {
            if (Gate::denies('updateExperience')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }else{
            if (Gate::denies('createExperience')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }

        $locales = getLocales();

        if ($request->id){
            $valid['id'] = "required|exists:experience,id";
            $valid['image'] = "nullable|image";
        }else{
            $valid['image'] = "required|image";
        }

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['tab_' . $loc->locale] = 'required|string';
                $valid['title_' . $loc->locale] = 'required|string';
                $valid['text_' . $loc->locale] = 'required|string';
            }
        }

        request()->validate($valid);

        if ($request->id) {
            $data = Experience::find($request->id);
        }else{
            $data = new Experience();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('tab',$locale->locale,$request->input('tab_' . $locale->locale));
            $data->setTranslation('title',$locale->locale,$request->input('title_' . $locale->locale));
            $data->setTranslation('text',$locale->locale,$request->input('text_' . $locale->locale));
        }

        $data->save();

        if($request->image){
            $imageData = [
                'gate'      => 'updateTeam',
                'data'      => $data,
                'column'    => 'image',
                'folder'    => 'img',
                'src'       => $request->file('image'),
                'thumbs'    => [],
                'webp' => true,
            ];
            imageHandle::addImage((object) $imageData);
        }

        if ($request->id) {
            session()->flash('success', tr('experience updated successfully!'));
        }else{
            session()->flash('success', tr('experience created successfully!'));
        }

        return redirect()->route('CMS.experience.list');
    }





    public function delete(Request $request)
    {
        if (Gate::denies('deleteExperience')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $experience = Experience::findOrFail($request->id);
        $experience->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id =  $row['id'];
            $ord = $row['position'];
            $experience = Experience::find($id);
            if ($experience){
                $experience->update(['ord'=>$ord]);
            }
        }
    }


}
