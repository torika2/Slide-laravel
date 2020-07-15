<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Clients\Clients;
use App\Models\Seo\Seo;
use App\Models\Software\Pricing;
use App\Models\Software\PricingParams;
use App\Models\Software\Software;
use App\Models\StaticData\StaticData;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\View;

class SoftwareController extends Controller
{

    public function index($locale = null)
    {


        $software = Software::find(1);
        $data['software'] = $software;
        $pricing = Pricing::orderBy('ord','ASC')->get();
        $data['pricing'] = $pricing;
        $pricingParams = PricingParams::orderBy('ord','ASC')->get();
        $data['params'] = $pricingParams;


        $staticData = StaticData::where('module', 'software')->first();
        $data['staticData'] = $staticData;


        $clients = Clients::where('block',1)->orderBy('ord','ASC')->get();
        $data['clients'] = $clients;
        $alternativeLang = getLocales(true)->where('locale', '!=', App::getLocale())->first();
        $data['alternativeLang'] = route('app.software', [$alternativeLang->locale]);

        $data = (object)$data;
        View::share('module', 'software');

        return view('app.pages.software', compact('data'));
    }
}
