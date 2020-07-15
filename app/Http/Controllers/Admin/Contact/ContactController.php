<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Admin\Controller;
use App\Models\Contact\Contact;
use App\Models\StaticData\StaticData;
use App\Providers\ImageServiceProvider as imageHandle;
use Illuminate\Http\Request;
use Gate;
use Illuminate\Support\Str;
use Image;

class ContactController extends Controller
{

    public function index()
    {
        if (Gate::denies('viewContact')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = Contact::orderBy('ord', 'DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($data)
                ->addColumn('action', function ($row) {
                    return '<a href="' . route('CMS.contact.update', $row->id) . '" class="btn btn-success edit"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        $staticData = StaticData::where('module', 'contact')->first();

        return view('CMS.Pages.Contact.list', compact('staticData'));
    }


    public function create()
    {
        if (Gate::denies('createContact')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }


        return view('CMS.Pages.Contact.create');
    }


    public function update($id)
    {
        if (Gate::denies('updateContact')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = Contact::findOrFail($id);
        return view('CMS.Pages.Contact.create', compact('data'));
    }


    public function store(Request $request)
    {
        if ($request->id) {
            if (Gate::denies('updateContact')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        } else {
            if (Gate::denies('createContact')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }


        $locales = getLocales();

        if ($request->id) {
            $valid['id'] = "required|exists:contact,id";

        }
        $valid['email'] = "required|email";
        $valid['phone'] = "required";

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['name_' . $loc->locale] = 'required|string';
                $valid['department_' . $loc->locale] = 'required|string';

            }
        }

        request()->validate($valid);

        if ($request->id) {
            $data = Contact::find($request->id);
        } else {
            $data = new Contact();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('department', $locale->locale, $request->input('department_' . $locale->locale));
            $data->setTranslation('name', $locale->locale, $request->input('name_' . $locale->locale));
        }
        $data->email = $request->email;
        $data->phone = $request->phone;
        if ($request->header) {
            $data->header = $request->header;
        } else {
            $data->header = 0;
        }

        if ($request->faq) {
            $data->faq = $request->faq;
        } else {
            $data->faq = 0;
        }

        $data->save();


        if ($request->id) {
            session()->flash('success', tr('Data updated successfully!'));
        } else {
            session()->flash('success', tr('Data created successfully!'));
        }

        return redirect()->route('CMS.contact.list');
    }


    public function delete(Request $request)
    {
        if (Gate::denies('deleteContact')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $data = Contact::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id = $row['id'];
            $ord = $row['position'];
            $data = Contact::find($id);
            if ($data) {
                $data->update(['ord' => $ord]);
            }
        }
    }


}
