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

class TermsController extends Controller
{

    public function index($locale = null)
    {


        $terms = Privacy::find(2);
        $data['terms'] = $terms;
        $staticData =  StaticData::where('module','terms')->first();
        $data['staticData'] = $staticData;

        $alternativeLang = getLocales(true)->where('locale', '!=', App::getLocale())->first();
        $data['alternativeLang'] = route('app.terms', [$alternativeLang->locale]);

        $data = (object)$data;

        return view('app.pages.termsAndConditions', compact('data'));
    }
}
