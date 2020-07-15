<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Clients\Clients;
use App\Models\Contact\Contact;
use App\Models\Privacy\Privacy;
use App\Models\Seo\Seo;
use App\Models\Settings\Settings;
use App\Models\Software\Pricing;
use App\Models\Software\PricingParams;
use App\Models\Software\Software;
use App\Models\StaticData\StaticData;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class ContactController extends Controller
{

    public function index($locale = null)
    {


        $contacts = Contact::orderBy('ord','ASC')->get();
        $data['contacts'] = $contacts;
        $staticData =  StaticData::where('module','contact')->first();
        $data['staticData'] = $staticData;

        $seo = Seo::where('module', 'contact')->first();
        $data['seo'] = $seo;

        $alternativeLang = getLocales(true)->where('locale', '!=', App::getLocale())->first();
        $data['alternativeLang'] = route('app.contact', [$alternativeLang->locale]);

        $data = (object)$data;
        View::share('module', 'contact');

        return view('app.pages.contact', compact('data'));
    }



    public function mailSending(Request $request,$locale = null)
    {
        $valid['email'] = 'required|email';
        $valid['name'] = 'required|string';
        $valid['subject'] = 'required|string';
        $valid['message'] = 'required|string';
        $valid['g-recaptcha-response'] = 'required|captcha';
        request()->validate($valid);

        $msg = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
        );

        $settings = Settings::where('key','email')->first();


        Mail::send('vendor.Mail', ['data'=>$msg], function ($message) use($settings)   {
            $message->to($settings->data['contact'])->subject
            (tr('messaged from contact page'));
            $message->from(env('MAIL_USERNAME'), 'Contact Page Message');
        });


        return redirect()->route('app.contact',[App::getLocale(),'success=true']);
    }




}
