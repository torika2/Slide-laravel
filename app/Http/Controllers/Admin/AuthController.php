<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('CMS.Dashboard');
        }
        return view('CMS.login');
    }
    public function postLogin(Request $request)
    {
        $validateArray = [
            'username' => 'required',
            'password' => 'required',
        ];
        if (env('NOCAPTCHA')) {
            $validateArray['g-recaptcha-response'] = 'required|captcha';
        }

        request()->validate($validateArray);
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('CMS.Dashboard');
        }
        session()->flash('error', tr('you have entered invalid credentials'));
        return redirect()->back()->withInput($request->input());
    }

    public function logOut()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
