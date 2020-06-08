<?php

namespace App\Http\Controllers\Admin\Logs;


use App\Http\Controllers\Admin\Controller;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Gate;

class LogsController extends Controller
{


    public function logs()
    {
        if (Gate::denies('viewLog')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $logs = Activity::with('causer')->orderBy('created_at', 'DESC')->get();
        if (request()->ajax()) {
            return datatables()->collection($logs)
                ->addColumn('model', function ($row) {
                    return $row->subject_type;
                })
                ->addColumn('fullname', function ($row) {
                    if ($row->causer) {
                        return $row->causer->fullname;
                    } else {
                        return 'system';
                    }
                })
                ->addColumn('date', function ($row) {
                    return changedatetime($row->created_at);
                })
                ->addColumn('action', function ($row) {
                    return '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '"
                              data-original-title="view" class="btn btn-success view-data"> <i class="fal fa-eye"></i> </a> ';
                })
                ->rawColumns(['action','date','fullname', 'model'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('CMS.Pages.Logs.logs');
    }

    public function view(Request $request)
    {

        if (Gate::denies('viewLog')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $log = Activity::with('causer')->findOrFail($request->id);

        return $log;
    }
}
