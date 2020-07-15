<?php

namespace App\Http\Controllers\Admin\Subscriptions;

use App\Exports\SubscriptionsExport;
use App\Http\Controllers\Admin\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Subscriptions\Subscriptions;
use Gate;
use Illuminate\Support\Str;
use Image;
use Maatwebsite\Excel\Facades\Excel;

class SubscriptionController extends Controller
{

    public function index()
    {
        if (Gate::denies('viewSubscriptions')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = Subscriptions::orderBy('created_at', 'DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($data)
                ->addColumn('date', function ($row) {
                    return changedatetime($row->created_at);
                })
                ->rawColumns(['date'])
                ->make(true);
        }

        return view('CMS.Pages.subscriptions.subscriptions');
    }


    public function export()
    {
        $filename = 'subscribers ' . Carbon::now()->toDateString();
        return Excel::download(new SubscriptionsExport, $filename . '.xlsx');
    }


}
