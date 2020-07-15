<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\About\About;
use App\Models\About\Experience;
use App\Models\About\Teams;
use App\Models\Clients\Clients;
use App\Models\Seo\Seo;
use App\Models\Solutions\Solutions;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\View;

class AboutController extends Controller
{

    public function index($locale = null)
    {

        $about = About::first();
        $data['about'] = $about;
        $experience = Experience::orderBy('ord','ASC')->get();
        $data['experience'] = $experience;
        $team = Teams::orderBy('ord','ASC')->get();
        $data['team'] = $team;


        $clients = Clients::where('block',1)->orderBy('ord','ASC')->get();
        $data['clients'] = $clients;
        $solutions = Solutions::orderBy('ord','ASC')->take(4)->get();
        $data['solutions'] = $solutions;
        $seo = Seo::where('module','about')->first();
        $data['seo'] = $seo;
        $alternativeLang = getLocales(true)->where('locale','!=',App::getLocale())->first();
        $data['alternativeLang'] = route('app.about',[$alternativeLang->locale]);

        View::share('module', 'about');
        $data = (object) $data;

        return view('app.pages.about', compact('data'));
    }
}
