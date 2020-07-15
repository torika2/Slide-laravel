<?php

namespace App\Exports;

use App\Models\Subscriptions\Subscriptions;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SubscriptionsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {

        $subscriptions = Subscriptions::get();



        return view('exports.subscriptions',compact('subscriptions'));
    }



}
