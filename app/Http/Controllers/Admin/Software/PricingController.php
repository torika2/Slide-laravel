<?php

namespace App\Http\Controllers\Admin\Software;

use App\Http\Controllers\Admin\Controller;
use App\Models\Software\PricingParams;
use App\Models\StaticData\StaticData;
use Illuminate\Http\Request;
use App\Providers\ImageServiceProvider as imageHandle;
use App;
use Gate;
use Response;
use Validator;
use Session;
use App\Models\Software\Software;
use App\Models\Software\Pricing;

class PricingController extends Controller
{



    public function index()
    {
        if (Gate::denies('viewSoftwarePricing')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = Pricing::orderBy('ord','DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($data)
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('CMS.software.pricing.update',$row->id).'" class="btn btn-success edit"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('CMS.Pages.Software.Pricing.list');
    }


    public function create()
    {
        if (Gate::denies('createSoftwarePricing')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }


        $params = PricingParams::orderBy('ord','ASC')->get();
        return view('CMS.Pages.Software.Pricing.create',compact('params'));
    }


    public function update($id)
    {
        if (Gate::denies('updateSoftwarePricing')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = Pricing::findOrFail($id);
        $params = PricingParams::orderBy('ord','ASC')->get();

        return view('CMS.Pages.Software.Pricing.create',compact('data','params'));
    }



    public function store(Request $request)
    {

        if ($request->id) {
            if (Gate::denies('updateSoftwarePricing')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }else{
            if (Gate::denies('createSoftwarePricing')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }


        $locales = getLocales();

        if ($request->id){
            $valid['id'] = "required|exists:software_pricing,id";
        }

        $valid['m_price'] = "required";
        $valid['y_price'] = "required";

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['title_' . $loc->locale] = 'required|string';
                $valid['link_' . $loc->locale] = 'required|string';

            }
        }

        request()->validate($valid);

        if ($request->id) {
            $data = Pricing::find($request->id);
        }else{
            $data = new Pricing();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('title',$locale->locale,$request->input('title_' . $locale->locale));
            $data->setTranslation('link',$locale->locale,$request->input('link_' . $locale->locale));
        }

        $data->m_price = $request->m_price;
        $data->y_price = $request->y_price;
        if ($request->popular){

            $data->popular = $request->popular;
        }else{
            $data->popular = 0;
        }
        //return $request;
        $data->params = $request->params;
        $data->save();
        if ($request->id) {
            session()->flash('success', tr('Data updated successfully!'));
        }else{
            session()->flash('success', tr('Data created successfully!'));
        }

        return redirect()->route('CMS.software.pricing.list');
    }








    public function delete(Request $request)
    {
        if (Gate::denies('updateSoftwarePricing')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $data = Pricing::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id =  $row['id'];
            $ord = $row['position'];
            $data = Pricing::find($id);
            if ($data){
                $data->update(['ord'=>$ord]);
            }
        }
    }


}
