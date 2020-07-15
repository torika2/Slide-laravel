<?php

namespace App\Http\Controllers\Admin\Clients;

use App\Http\Controllers\Admin\Controller;
use App\Providers\ImageServiceProvider as imageHandle;
use Illuminate\Http\Request;
use App\Models\Clients\Clients;
use Gate;
use Illuminate\Support\Str;
use Image;

class ClientsController extends Controller
{

    public function index()
    {
        if (Gate::denies('viewClients')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $clients = Clients::orderBy('ord','DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($clients)
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('CMS.clients.update',$row->id).'" class="btn btn-success edit-clients"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete-data btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('CMS.Pages.Clients.clients');
    }


    public function create()
    {
        if (Gate::denies('createClients')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }


        return view('CMS.Pages.Clients.create');
    }


    public function update($id)
    {
        if (Gate::denies('updateClients')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $clients = Clients::findOrFail($id);
        return view('CMS.Pages.Clients.create',compact('clients'));
    }



    public function store(Request $request)
    {
        if ($request->id) {
            if (Gate::denies('updateClients')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }else{
            if (Gate::denies('createClients')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }

        $locales = getLocales();

        if ($request->id){
            $valid['id'] = "required|exists:clients,id";
            $valid['logo'] = "nullable|image";
        }else{
            $valid['logo'] = "required|image";
        }
        $valid['web'] = "nullable|url";

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['name_' . $loc->locale] = 'required|string';
            }
        }

        request()->validate($valid);

        if ($request->id) {
            $data = Clients::find($request->id);
        }else{
            $data = new Clients();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('name',$locale->locale,$request->input('name_' . $locale->locale));
          }
        $data->web = $request->web;

        if ($request->block){

            $data->block = $request->block;
        }else{
            $data->block = 0;
        }
        $data->save();

        if($request->logo){
            $imageData = [
                'gate'      => 'updateClients',
                'data'      => $data,
                'column'    => 'logo',
                'folder'    => 'img',
                'src'       => $request->file('logo'),
                'thumbs'    => [],
                'webp' => true,
            ];
            imageHandle::addImage((object) $imageData);
        }

        if ($request->id) {
            session()->flash('success', tr('Clients updated successfully!'));
        }else{
            session()->flash('success', tr('Clients created successfully!'));
        }

        return redirect()->route('CMS.clients.list');
    }









    public function delete(Request $request)
    {
        if (Gate::denies('deleteClients')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $clients = Clients::findOrFail($request->id);
        $clients->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id =  $row['id'];
            $ord = $row['position'];
            $clients = Clients::find($id);
            if ($clients){
                $clients->update(['ord'=>$ord]);
            }
        }
    }


}
