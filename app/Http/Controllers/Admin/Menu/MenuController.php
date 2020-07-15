<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Controllers\Admin\Controller;
use App\Models\Modules;
use App\Models\StaticData\StaticData;
use Illuminate\Http\Request;
use App\Providers\ImageServiceProvider as imageHandle;
use App;
use Gate;
use Response;
use Validator;
use Session;
use App\Models\Menu\Menu;

class MenuController extends Controller
{


    public function index()
    {
        if (Gate::denies('viewMenu')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = Menu::orderBy('ord', 'DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($data)
                ->addColumn('action', function ($row) {
                    return '<a href="' . route('CMS.menu.update', $row->id) . '" class="btn btn-success edit"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }


        return view('CMS.Pages.Menu.list');
    }









    public function create()
    {
        if (Gate::denies('createMenu')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $modules = Modules::get();
        return view('CMS.Pages.Menu.create',compact('modules'));
    }


    public function update($id)
    {
        if (Gate::denies('updateMenu')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = Menu::findOrFail($id);
        $modules = Modules::get();
        return view('CMS.Pages.Menu.create', compact('data','modules'));
    }


    public function store(Request $request)
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
            $valid['id'] = "required|exists:menu,id";

        }

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['title_' . $loc->locale] = 'required|string';
                $valid['link_' . $loc->locale] = 'required|url';
            }
        }
        $valid['module_id'] = "nullable|exists:modules,id";

        request()->validate($valid);


        if ($request->id) {
            $data = Menu::find($request->id);
        } else {
            $data = new Menu();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('title', $locale->locale, $request->input('title_' . $locale->locale));
            $data->setTranslation('link', $locale->locale, $request->input('link_' . $locale->locale));
        }
        $data->module_id = $request->module_id;
        $data->save();
        if ($request->id) {
            session()->flash('success', tr('Data updated successfully!'));
        } else {
            session()->flash('success', tr('Data created successfully!'));
        }

        return redirect()->route('CMS.menu.list');
    }

    public function delete(Request $request)
    {
        if (Gate::denies('deleteMenu')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $data = Menu::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id = $row['id'];
            $ord = $row['position'];
            $data = Menu::find($id);
            if ($data) {
                $data->update(['ord' => $ord]);
            }
        }
    }


}
