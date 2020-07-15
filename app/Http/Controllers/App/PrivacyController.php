<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Clients\Clients;
use App\Models\Privacy\Privacy;
use App\Models\Seo\Seo;
use App\Models\Software\Pricing;
use App\Models\Software\PricingParams;
use App\Models\Software\Software;
use App\Models\StaticData\StaticData;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\View;

class PrivacyController extends Controller
{

    public function index($locale = null)
    {


        $privacy = Privacy::find(1);
        $data['privacy'] = $privacy;
        $staticData =  StaticData::where('module','privacy')->first();
        $data['staticData'] = $staticData;

        $alternativeLang = getLocales(true)->where('locale', '!=', App::getLocale())->first();
        $data['alternativeLang'] = route('app.privacy', [$alternativeLang->locale]);

        $data = (object)$data;

        View::share('module', 'pertners');
        return view('app.pages.privacyPolicy', compact('data'));
    }
}
