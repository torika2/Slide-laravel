<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Clients\Clients;
use App\Models\Home\Advantage;
use App\Models\Home\AdvantageStatic;
use App\Models\Home\Head;
use App\Models\Home\WelyHube;
use App\Models\Seo\Seo;
use App\Models\Solutions\Solutions;
use App\Models\UseCase\Container;
use App\Models\Home\SoftwareComponent;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    public function index($locale = null)
    {


        $useCaseCont = Container::orderBy('ord','ASC')->get();
        $data['useCaseContainer'] = $useCaseCont;

        $hube = WelyHube::orderBy('ord','ASC')->take(3)->get();
        $data['welyhube'] = $hube;


        $seo = Seo::where('module', 'main')->first();
        $data['seo'] = $seo;

        $head = Head::first();
        $data['head'] = $head;

        $solutions = Solutions::orderBy('ord','ASC')->take(4)->get();
        $data['solutions'] = $solutions;

        $advStatic = AdvantageStatic::first();
        $data['advStatic'] = $advStatic;

        $advantage = Advantage::orderBy('ord','ASC')->get();
        $data['advantage'] = $advantage;

        $clients = Clients::where('block',1)->orderBy('ord','ASC')->take(8)->get();
        $data['clients'] = $clients;

        $softwareComponent = SoftwareComponent::find(1);
        $data['SoftwareComponent'] = $softwareComponent;

        $alternativeLang = getLocales(true)->where('locale','!=',App::getLocale())->first();
        $data['alternativeLang'] = route('app.home-l',[$alternativeLang->locale]);

        $data['module'] = 'home';

        View::share('module', 'home');

        $data = (object) $data;


        return view('app.pages.home', compact('data'));
    }
}
