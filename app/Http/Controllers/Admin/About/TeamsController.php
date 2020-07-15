<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Admin\Controller;
use App\Providers\ImageServiceProvider as imageHandle;
use Illuminate\Http\Request;
use App\Models\About\Teams;
use Gate;
use Illuminate\Support\Str;
use Image;

class TeamsController extends Controller
{

    public function index()
    {
        if (Gate::denies('viewTeam')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $teams = Teams::orderBy('ord','DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($teams)
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('CMS.teams.update',$row->id).'" class="btn btn-success edit-team"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete-team btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('CMS.Pages.About.team.teams');
    }


    public function create()
    {
        if (Gate::denies('createTeam')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }


        return view('CMS.Pages.About.team.create');
    }


    public function update($id)
    {
        if (Gate::denies('updateTeam')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $team = Teams::findOrFail($id);
        return view('CMS.Pages.About.team.create',compact('team'));
    }



    public function store(Request $request)
    {
        if ($request->id) {
            if (Gate::denies('updateTeam')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }else{
            if (Gate::denies('createTeam')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }

        $locales = getLocales();

        if ($request->id){
            $valid['id'] = "required|exists:teams,id";
            $valid['image'] = "nullable|image";
        }else{
            $valid['image'] = "required|image";
        }

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['name_' . $loc->locale] = 'required|string';
                $valid['position_' . $loc->locale] = 'required|string';
            }
        }

        request()->validate($valid);

        if ($request->id) {
            $data = Teams::find($request->id);
        }else{
            $data = new Teams();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('name',$locale->locale,$request->input('name_' . $locale->locale));
            $data->setTranslation('position',$locale->locale,$request->input('position_' . $locale->locale));
        }

        $data->save();

        if($request->image){
            $imageData = [
                'gate'      => 'updateTeam',
                'data'      => $data,
                'column'    => 'image',
                'folder'    => 'img',
                'src'       => $request->file('image'),
                'thumbs'    => [['width' => 768]],
                'webp' => true,
            ];
            imageHandle::addImage((object) $imageData);
        }

        if ($request->id) {
            session()->flash('success', tr('Team updated successfully!'));
        }else{
            session()->flash('success', tr('Team created successfully!'));
        }

        return redirect()->route('CMS.teams.list');
    }









    public function delete(Request $request)
    {
        if (Gate::denies('deleteTeam')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $team = Teams::findOrFail($request->id);
        $team->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id =  $row['id'];
            $ord = $row['position'];
            $team = Teams::find($id);
            if ($team){
                $team->update(['ord'=>$ord]);
            }
        }
    }


}
