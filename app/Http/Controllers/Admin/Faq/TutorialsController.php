<?php

namespace App\Http\Controllers\Admin\Faq;

use App\Http\Controllers\Admin\Controller;
use App\Models\FAQ\Tags;
use App\Models\FAQ\Tutorials;
use App\Models\StaticData\StaticData;
use Illuminate\Http\Request;
use App\Providers\ImageServiceProvider as imageHandle;
use App;
use Gate;
use Illuminate\Support\Str;
use Response;
use Validator;
use Session;
use App\Models\FAQ\Faq;

class TutorialsController extends Controller
{


    public function index($tagId)
    {
        if (Gate::denies('viewTutorial')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = Tutorials::where('tag_id',$tagId)->orderBy('ord', 'DESC')->get();
        if (request()->ajax()) {
            return datatables()->collection($data)
                ->addColumn('action', function ($row) use ($tagId) {
                    return '<a href="' . route('CMS.tutorials.update', [$tagId,$row->id]) . '" class="btn btn-success edit"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }


        $tag['id'] = $tagId;
        $tag = (object)$tag;

        return view('CMS.Pages.Faq.Tutorials.list',compact('tag'));
    }


    public function create($tagId)
    {
        if (Gate::denies('createTutorial')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $tag['id'] = $tagId;
        $tag = (object)$tag;
        $tags = Tags::orderBy('ord','ASC')->get();

        return view('CMS.Pages.Faq.Tutorials.create',compact('tag','tags'));
    }


    public function update($tagId,$id)
    {
        if (Gate::denies('updateTutorial')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = Tutorials::where('tag_id',$tagId)->findOrFail($id);
        $tag['id'] = $tagId;
        $tag = (object)$tag;
        $tags = Tags::orderBy('ord','ASC')->get();
        return view('CMS.Pages.Faq.Tutorials.create', compact('data','tag','tags'));
    }


    public function store($tagId,Request $request)
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
        $tag['id'] = $tagId;
        $tag = (object)$tag;


        $locales = getLocales();

        if ($request->id) {
            $valid['id'] = "required|exists:tutorials,id";
        }

        $valid['tag_id'] = "required|exists:tutorial_tag,id";

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['title_' . $loc->locale] = 'required|string';
                $valid['text_' . $loc->locale] = 'required|string';
            }
        }

        request()->validate($valid);

        if ($request->id) {
            $data = Tutorials::find($request->id);
        } else {
            $data = new Tutorials();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('title', $locale->locale, $request->input('title_' . $locale->locale));
            $data->setTranslation('text', $locale->locale, $request->input('text_' . $locale->locale));
            $data->setTranslation('slug',$locale->locale,str::slug($request->input('title_' . $locale->locale) . ' ' . $data->id));
        }
        $data->tag_id = $request->tag_id;
        $data->save();
        if ($request->id) {
            session()->flash('success', tr('Data updated successfully!'));
        } else {
            session()->flash('success', tr('Data created successfully!'));
        }

        return redirect()->route('CMS.tutorials.list',$tagId);
    }

    public function delete($tag,Request $request)
    {
        if (Gate::denies('updateTutorial')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $data = Tutorials::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder($tag,Request $request)
    {
        foreach ($request->rows as $row) {
            $id = $row['id'];
            $ord = $row['position'];
            $data = Tutorials::find($id);
            if ($data) {
                $data->update(['ord' => $ord]);
            }
        }
    }


}
