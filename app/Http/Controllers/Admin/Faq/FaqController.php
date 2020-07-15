<?php

namespace App\Http\Controllers\Admin\Faq;

use App\Http\Controllers\Admin\Controller;
use App\Models\StaticData\StaticData;
use Illuminate\Http\Request;
use App\Providers\ImageServiceProvider as imageHandle;
use App;
use Gate;
use Response;
use Validator;
use Session;
use App\Models\FAQ\Faq;

class FaqController extends Controller
{


    public function index()
    {
        if (Gate::denies('viewFAQ')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = Faq::orderBy('ord', 'DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($data)
                ->addColumn('action', function ($row) {
                    return '<a href="' . route('CMS.faq.update', $row->id) . '" class="btn btn-success edit"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

//        $staticData = StaticData::where('module','faq')->first();
        $staticData = [];
        return view('CMS.Pages.Faq.list',compact('staticData'));
    }


    public function create()
    {
        if (Gate::denies('createFAQ')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }


        return view('CMS.Pages.Faq.create');
    }


    public function update($id)
    {
        if (Gate::denies('updateFAQ')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = Faq::findOrFail($id);
        return view('CMS.Pages.Faq.create', compact('data'));
    }


    public function store(Request $request)
    {
        if ($request->id) {
            if (Gate::denies('updateFAQ')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        } else {
            if (Gate::denies('createFAQ')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }


        $locales = getLocales();

        if ($request->id) {
            $valid['id'] = "required|exists:faq,id";

        }

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['title_' . $loc->locale] = 'required|string';
                $valid['text_' . $loc->locale] = 'required|string';
            }
        }

        request()->validate($valid);

        if ($request->id) {
            $data = Faq::find($request->id);
        } else {
            $data = new Faq();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('title', $locale->locale, $request->input('title_' . $locale->locale));
            $data->setTranslation('text', $locale->locale, $request->input('text_' . $locale->locale));
        }
        $data->save();
        if ($request->id) {
            session()->flash('success', tr('Data updated successfully!'));
        } else {
            session()->flash('success', tr('Data created successfully!'));
        }

        return redirect()->route('CMS.faq.list');
    }

    public function delete(Request $request)
    {
        if (Gate::denies('updateFAQ')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $data = Faq::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id = $row['id'];
            $ord = $row['position'];
            $data = Faq::find($id);
            if ($data) {
                $data->update(['ord' => $ord]);
            }
        }
    }


}
