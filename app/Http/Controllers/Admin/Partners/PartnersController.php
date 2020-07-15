<?php

namespace App\Http\Controllers\Admin\Partners;

use App\Http\Controllers\Admin\Controller;
use App\Models\StaticData\StaticData;
use App\Providers\ImageServiceProvider as imageHandle;
use Illuminate\Http\Request;
use App\Models\Partners\Partners;
use Gate;
use Illuminate\Support\Str;
use Image;

class PartnersController extends Controller
{

    public function index()
    {
        if (Gate::denies('viewPartners')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $partners = Partners::orderBy('ord','DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($partners)
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('CMS.partners.update',$row->id).'" class="btn btn-success edit-partners"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete-partners btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        $staticData = StaticData::where('module','partners')->first();
        return view('CMS.Pages.Partners.partners',compact('staticData'));
    }


    public function create()
    {
        if (Gate::denies('createPartners')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }


        return view('CMS.Pages.Partners.create');
    }


    public function update($id)
    {
        if (Gate::denies('updatePartners')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $partners = Partners::findOrFail($id);
        return view('CMS.Pages.Partners.create',compact('partners'));
    }



    public function store(Request $request)
    {
        if ($request->id) {
            if (Gate::denies('updatePartners')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }else{
            if (Gate::denies('createPartners')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }

        $locales = getLocales();

        if ($request->id){
            $valid['id'] = "required|exists:partners,id";

        }

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['name_' . $loc->locale] = 'required|string';
                $valid['address_' . $loc->locale] = 'required|string';

            }
        }
        $valid['phone'] = 'required|numeric';
        $valid['email'] = 'required|email';
        $valid['web'] = 'nullable|url';
        $valid['linkname'] = 'required|string';

        request()->validate($valid);

        if ($request->id) {
            $data = Partners::find($request->id);
        }else{
            $data = new Partners();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('name',$locale->locale,$request->input('name_' . $locale->locale));
            $data->setTranslation('address',$locale->locale,$request->input('address_' . $locale->locale));
         }
        $data->linkname = $request->linkname;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->web = $request->web;
        $data->save();



        if ($request->id) {
            session()->flash('success', tr('partner updated successfully!'));
        }else{
            session()->flash('success', tr('partner created successfully!'));
        }

        return redirect()->route('CMS.partners.list');
    }





    public function delete(Request $request)
    {
        if (Gate::denies('deletePartners')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $partners = Partners::findOrFail($request->id);
        $partners->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id =  $row['id'];
            $ord = $row['position'];
            $partners = Partners::find($id);
            if ($partners){
                $partners->update(['ord'=>$ord]);
            }
        }
    }


}
