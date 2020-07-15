<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Admin\Controller;
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
use App\Models\Product\Included;

class IncludedController extends Controller
{



    public function index()
    {
        if (Gate::denies('viewProduct')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = Included::orderBy('ord','DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($data)
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('CMS.product.included.update',$row->id).'" class="btn btn-success edit"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('CMS.Pages.Product.Included.list',compact('data'));
    }


    public function create()
    {
        if (Gate::denies('createProduct')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = Included::get();
        if ($data->count() < 3){
            return view('CMS.Pages.Product.Included.create');
        }else{

            session()->flash('error', tr('available only 3 Includes'));
            return redirect()->back();
        }



    }


    public function update($id)
    {
        if (Gate::denies('updateProduct')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = Included::findOrFail($id);
        return view('CMS.Pages.Product.Included.create',compact('data'));
    }



    public function store(Request $request)
    {
        if ($request->id) {
            if (Gate::denies('updateProduct')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }else{
            if (Gate::denies('createProduct')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }


        $locales = getLocales();

        if ($request->id){
            $valid['id'] = "required|exists:product_included,id";

        }

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['name_' . $loc->locale] = 'required|string';
                $valid['text_' . $loc->locale] = 'required|string';
            }
        }

        request()->validate($valid);

        if ($request->id) {
            $data = Included::find($request->id);
        }else{
            $data = new Included();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('name',$locale->locale,$request->input('name_' . $locale->locale));
            $data->setTranslation('text',$locale->locale,$request->input('text_' . $locale->locale));
            $data->setTranslation('button',$locale->locale,$request->input('button_' . $locale->locale));
            $data->setTranslation('link',$locale->locale,$request->input('link_' . $locale->locale));
        }
        $data->save();
        if ($request->id) {
            session()->flash('success', tr('Data updated successfully!'));
        }else{
            session()->flash('success', tr('Data created successfully!'));
        }

        return redirect()->route('CMS.product.included.list');
    }








    public function delete(Request $request)
    {
        if (Gate::denies('updateProduct')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $data = Included::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id =  $row['id'];
            $ord = $row['position'];
            $data = Included::find($id);
            if ($data){
                $data->update(['ord'=>$ord]);
            }
        }
    }


}
