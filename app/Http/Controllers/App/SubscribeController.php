<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Subscriptions\Subscriptions;
use Illuminate\Http\Request;
use App;

class SubscribeController extends Controller
{

    public function subscribe(Request $request,$locale = null)
    {
        $mail = Subscriptions::where('email',$request->email)->first();

        if ($mail){
            return Response()->json(['error'=>tr('This email address has already subscribed')]);

        }

        $subsc = new Subscriptions();
        $subsc->email = $request->email;
        $subsc->save();
        if ($subsc){
            return Response()->json(['success'=>tr('email subscribed successfully!')]);
        }
    }
}
