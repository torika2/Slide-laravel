<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Clients\Clients;
use App\Models\Privacy\Privacy;
use App\Models\Seo\Seo;

use App\Models\StaticData\StaticData;
use App\Models\UseCase\Container;
use App\Models\UseCase\Industry;
use App\Models\UseCase\UseCases;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\View;

class UseCasesController extends Controller
{

    public function index($locale = null, $tag = null)
    {

        if ($tag) {
            $cases = UseCases::with('industry', 'client', 'solutions')
                ->whereHas('industry', function ($query) use ($tag) {
                    return $query->where('slug->' . App::getLocale(), $tag);
                })->orderBy('ord', 'ASC')->paginate(4);
            $industry = Industry::where('slug->' . App::getLocale(), $tag)->first();
        } else {
            $cases = UseCases::with('industry', 'client', 'solutions')->orderBy('ord', 'ASC')->paginate(4);
            $industry = Industry::orderBy('ord','ASC')->first();
        }
        $data['industry'] = $industry;

        $data['cases'] = $cases;
        $industries = Industry::orderBy('ord', 'ASC')->get();
        $data['tags'] = $industries;

        $seo = Seo::where('module', 'useCases')->first();
        $data['seo'] = $seo;

        $staticData = StaticData::where('module', 'usecase')->first();
        $data['staticData'] = $staticData;

        $clients = Clients::where('block',1)->orderBy('ord','ASC')->take(4)->get();
        $data['clients'] = $clients;

        $alternativeLang = getLocales(true)->where('locale', '!=', App::getLocale())->first();
        $data['alternativeLang'] = route('app.useCases', [$alternativeLang->locale]);

        $data = (object)$data;

        View::share('module', 'usecases');
        return view('app.pages.useCases', compact('data'));
    }


    public function useCase($locale = null, $slug = null)
    {

        $case = UseCases::with('industry', 'client', 'solutions')
            ->where('slug->' . App::getLocale(), $slug)
            ->orderBy('ord', 'ASC')->firstOrFail();

        $data['case'] = $case;

        $next = UseCases::where('ord', '>', $case->ord)->orderBy('ord','ASC')->first();
        if ($next) {
            $nextroute = route('app.useCase', [App::getLocale(), $next->slug]);
            $data['next'] = $nextroute;
        } else {
            $data['next'] = null;
        }


        $prev = UseCases::where('ord', '<', $case->ord)->orderBy('ord','DESC')->first();
        if ($prev) {
            $prevroute = route('app.useCase', [App::getLocale(), $prev->slug]);
            $data['prev'] = $prevroute;
        } else {
            $data['prev'] = null;
        }

        $industries = Industry::orderBy('ord', 'ASC')->get();
        $data['tags'] = $industries;

        $staticData = StaticData::where('module', 'usecase')->first();
        $data['staticData'] = $staticData;

        $alternativeLang = getLocales(true)->where('locale', '!=', App::getLocale())->first();
        $alternativeSlug = $case->getTranslation('slug', $alternativeLang->locale);

        $useCases = Container::orderBy('ord', 'ASC')->get();
        $data['useCases'] = $useCases;
        $data['alternativeLang'] = route('app.useCase', [$alternativeLang->locale, $alternativeSlug]);

        $data = (object)$data;
        View::share('module', 'usecases');

        return view('app.pages.useCase', compact('data'));
    }


}
