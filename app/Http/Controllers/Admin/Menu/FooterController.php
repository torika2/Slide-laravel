<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Controllers\Admin\Controller;
use Illuminate\Http\Request;
use App;
use Gate;
use Response;
use Validator;
use Session;
use App\Models\Menu\Footer;

class FooterController extends Controller
{


    public function columns()
    {
        if (Gate::denies('viewMenu')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        return view('CMS.Pages.MenuFooter.list');
    }


    public function index($columnId)
    {
        if (Gate::denies('viewMenu')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = Footer::orderBy('ord', 'DESC')->where('column_id',$columnId)->get();

        if (request()->ajax()) {

            return datatables()->collection($data)
                ->addColumn('action', function ($row) use($columnId) {
                    return '<a href="' . route('CMS.footerMenu.update',[$columnId, $row->id]) . '" class="btn btn-success edit"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }


        return view('CMS.Pages.MenuFooter.Menu',compact('columnId'));
    }


    public function create($columnId)
    {
        if (Gate::denies('createMenu')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        return view('CMS.Pages.MenuFooter.create', compact('columnId'));
    }


    public function update($columnId,$id)
    {
        if (Gate::denies('updateMenu')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = Footer::findOrFail($id);

        return view('CMS.Pages.MenuFooter.create', compact('data','columnId'));
    }


    public function store($columnId,Request $request)
    {
        if ($request->id) {
            if (Gate::denies('updateMenu')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        } else {
            if (Gate::denies('createMenu')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }


        $locales = getLocales();

        if ($request->id) {
            $valid['id'] = "required|exists:footer_menu,id";
        }

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['title_' . $loc->locale] = 'required|string';
                $valid['link_' . $loc->locale] = 'required|url';
            }
        }


        request()->validate($valid);


        if ($request->id) {
            $data = Footer::find($request->id);
        } else {
            $data = new Footer();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('title', $locale->locale, $request->input('title_' . $locale->locale));
            $data->setTranslation('link', $locale->locale, $request->input('link_' . $locale->locale));
        }
        $data->column_id = $columnId;
        $data->save();
        if ($request->id) {
            session()->flash('success', tr('Data updated successfully!'));
        } else {
            session()->flash('success', tr('Data created successfully!'));
        }

        return redirect()->route('CMS.footerMenu.list',[$columnId]);
    }

    public function delete(Request $request,$columnId)
    {
        if (Gate::denies('deleteMenu')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $data = Footer::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id = $row['id'];
            $ord = $row['position'];
            $data = Footer::find($id);
            if ($data) {
                $data->update(['ord' => $ord]);
            }
        }
    }


}
