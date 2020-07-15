<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Projects\Projects;
use App\Models\Projects\Tags;
use App\Models\Seo\Seo;
use App\Models\StaticData\StaticData;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\View;

class ProjectsController extends Controller
{

    public function index($locale = null, $tag = null)
    {



        if ($tag) {
            $projects = Projects::with('tags')
                ->whereHas('tags', function ($query) use ($tag) {
                    return $query->where('id', $tag);
                })->orderBy('ord', 'ASC')->paginate(6);

        } else {
            $projects = Projects::with('tags')->orderBy('ord', 'ASC')->paginate(6);

        }


        $data['projects'] = $projects;
        $tags = Tags::orderBy('ord', 'ASC')->get();
        $data['tags'] = $tags;

        $seo = Seo::where('module', 'projects')->first();
        $data['seo'] = $seo;

        $staticData = StaticData::where('module', 'projects')->first();
        $data['staticData'] = $staticData;



        $alternativeLang = getLocales(true)->where('locale', '!=', App::getLocale())->first();
        $data['alternativeLang'] = route('app.projects', [$alternativeLang->locale]);

        $data = (object)$data;

        View::share('module', 'projects');
        return view('app.pages.projects', compact('data'));
    }


    public function projectIn($locale = null, $slug = null)
    {

        $project = Projects::with('tags', 'client', 'solutions','images')
            ->where('slug->' . App::getLocale(), $slug)
            ->orderBy('ord', 'ASC')->firstOrFail();

        $data['project'] = $project;

        $next = Projects::where('ord', '>', $project->ord)->first();
        if ($next) {
            $nextroute = route('app.project', [App::getLocale(), $next->slug]);
            $data['next'] = $nextroute;
        } else {
            $data['next'] = null;
        }


        $prev = Projects::where('ord', '<', $project->ord)->orderBy('ord','DESC')->first();
        if ($prev) {
            $prevroute = route('app.project', [App::getLocale(), $prev->slug]);
            $data['prev'] = $prevroute;
        } else {
            $data['prev'] = null;
        }


        $staticData = StaticData::where('module', 'projects')->first();
        $data['staticData'] = $staticData;

        $alternativeLang = getLocales(true)->where('locale', '!=', App::getLocale())->first();
        $alternativeSlug = $project->getTranslation('slug', $alternativeLang->locale);
        $data['alternativeLang'] = route('app.project', [$alternativeLang->locale, $alternativeSlug]);

        $data = (object)$data;
        View::share('module', 'projects');

        return view('app.pages.projectInner', compact('data'));
    }


}
