<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Clients\Clients;
use App\Models\Partners\Partners;
use App\Models\Privacy\Privacy;
use App\Models\Seo\Seo;
use App\Models\Software\Pricing;
use App\Models\Software\PricingParams;
use App\Models\Software\Software;
use App\Models\StaticData\StaticData;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\View;

class PartnersController extends Controller
{

    public function index($locale = null)
    {
        $seo = Seo::where('module', 'partners')->first();
        $data['seo'] = $seo;


        $partners = Partners::orderBy('ord','ASC')->get();
        $data['partners'] = $partners;
        $staticData =  StaticData::where('module','partners')->first();
        $data['staticData'] = $staticData;

        $clients = Clients::where('block',1)->orderBy('ord','ASC')->take(2)->get();
        $data['clients'] = $clients;

        $alternativeLang = getLocales(true)->where('locale', '!=', App::getLocale())->first();
        $data['alternativeLang'] = route('app.partners', [$alternativeLang->locale]);

        $data = (object)$data;

        View::share('module', 'pertners');
        return view('app.pages.partners', compact('data'));
    }
}
