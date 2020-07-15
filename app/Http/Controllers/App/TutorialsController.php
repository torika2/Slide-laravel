<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Clients\Clients;
use App\Models\Contact\Contact;
use App\Models\FAQ\Faq;
use App\Models\FAQ\Tags;
use App\Models\FAQ\Tutorials;
use App\Models\Privacy\Privacy;
use App\Models\Seo\Seo;
use App\Models\Settings\Settings;
use App\Models\Software\Pricing;
use App\Models\Software\PricingParams;
use App\Models\Software\Software;
use App\Models\StaticData\StaticData;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\View;

class TutorialsController extends Controller
{

    public function faq(Request $request, $locale = null)
    {


        $query = Faq::query();
        if ($request->filter) {
            $query->where('title->'.App::getLocale(), 'LIKE', '%' . $request->filter . '%')
                ->orwhere(function ($query) use ($request) {
                    $query->where('text->'.App::getLocale(), 'LIKE', '%' . $request->filter . '%');
                });
        }
        $faq = $query->orderBy('ord', 'ASC')->get();


        $data['faq'] = $faq;


        $staticData = StaticData::where('module', 'faq')->first();
        $data['staticData'] = $staticData;

        $seo = Seo::where('module', 'faq')->first();
        $data['seo'] = $seo;

        $tags = Tags::orderBy('ord','ASC')->with('tutorials')->get();
        $data['tags'] = $tags;

        $contact = Contact::where('faq',1)->first();
        $data['contact'] = $contact;

        $alternativeLang = getLocales(true)->where('locale', '!=', App::getLocale())->first();
        $data['alternativeLang'] = route('app.faq', [$alternativeLang->locale]);

        $data = (object)$data;

        View::share('module', 'faq');

        return view('app.pages.faq', compact('data'));
    }



    public function tutorials(Request $request,$locale = null, $slug){



        $tutorial = Tutorials::where('slug->' . App::getLocale(),$slug)->firstOrFail();


        $data['tutorial'] = $tutorial;


        $staticData = StaticData::where('module', 'tutorials')->first();
        $data['staticData'] = $staticData;

        $seo = Seo::where('module', 'faq')->first();
        $data['seo'] = $seo;


        $alternativeLang = getLocales(true)->where('locale', '!=', App::getLocale())->first();
        $alternativeSlug = $tutorial->getTranslation('slug', $alternativeLang->locale);

        $data['alternativeLang'] = route('app.tutorials', [$alternativeLang->locale,$alternativeSlug]);




        $tags = Tags::orderBy('ord','ASC')->with('tutorials')->get();
        $data['tags'] = $tags;

        $contact = Contact::where('faq',1)->first();
        $data['contact'] = $contact;


        $data = (object)$data;


        View::share('module', 'tutorials');
        return view('app.pages.tutorials', compact('data'));

    }


}
