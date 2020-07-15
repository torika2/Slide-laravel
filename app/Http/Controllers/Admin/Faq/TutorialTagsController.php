<?php

namespace App\Http\Controllers\Admin\Faq;

use App\Http\Controllers\Admin\Controller;
use App\Models\StaticData\StaticData;
use Illuminate\Http\Request;
use App\Providers\ImageServiceProvider as imageHandle;
use App;
use Gate;
use Illuminate\Support\Str;
use Response;
use Validator;
use Session;
use App\Models\FAQ\Tags;

class TutorialTagsController extends Controller
{


    public function index()
    {
        if (Gate::denies('viewTutorial')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = Tags::orderBy('ord', 'DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($data)
                ->addColumn('action', function ($row) {
                    return '<a href="' . route('CMS.tutorials.list', $row->id) . '" class="btn btn-primary"> <i class="fal fa-eye"></i> '.tr('tutorials') .' ('.$row->tutorials()->count().') </a>
                            <a href="' . route('CMS.tutorials.tags.update', $row->id) . '" class="btn btn-success edit"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        $staticData = StaticData::where('module','tutorials')->first();

        return view('CMS.Pages.Faq.Tutorials.tags.list',compact('staticData'));
    }


    public function create()
    {
        if (Gate::denies('createTutorial')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }


        return view('CMS.Pages.Faq.Tutorials.tags.create');
    }


    public function update($id)
    {
        if (Gate::denies('updateTutorial')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = Tags::findOrFail($id);
        return view('CMS.Pages.Faq.Tutorials.tags.create', compact('data'));
    }


    public function store(Request $request)
    {
        if ($request->id) {
            if (Gate::denies('updateTutorial')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        } else {
            if (Gate::denies('createTutorial')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }


        $locales = getLocales();

        if ($request->id) {
            $valid['id'] = "required|exists:tutorial_tag,id";

        }

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['title_' . $loc->locale] = 'required|string';

            }
        }

        request()->validate($valid);

        if ($request->id) {
            $data = Tags::find($request->id);
        } else {
            $data = new Tags();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('title', $locale->locale, $request->input('title_' . $locale->locale));
            $data->setTranslation('slug',$locale->locale,str::slug($request->input('title_' . $locale->locale) . ' ' . $data->id));
        }
        $data->save();
        if ($request->id) {
            session()->flash('success', tr('Data updated successfully!'));
        } else {
            session()->flash('success', tr('Data created successfully!'));
        }

        return redirect()->route('CMS.tutorials.tags.list');
    }

    public function delete(Request $request)
    {
        if (Gate::denies('updateTutorial')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $data = Tags::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id = $row['id'];
            $ord = $row['position'];
            $data = Tags::find($id);
            if ($data) {
                $data->update(['ord' => $ord]);
            }
        }
    }


}
