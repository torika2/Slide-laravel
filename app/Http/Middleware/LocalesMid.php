<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Languages\Locales;
use App\Services\Languages\LanguagesService;
use App;

class LocalesMid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        if (request()->segment(1) != 'connect'){
            if ($request->route('locale') == null) {
                $language = getLocales()->where('default', 1)->first();
                Session::put('locale', $language->locale);
                app()->setLocale($language->locale);
                return $next($request);

            } else if ($request->route('locale')) {
                $language = getLocales()->where('locale', $request->route('locale'))->where('active', 1)->first();
                if (!empty($language)) {
                    Session::put('locale', $language->locale);
                    app()->setLocale($language->locale);
                    return $next($request);
                } else {
                    abort(404);
                }
            }
        }else{
            if (session()->has('admin_locale')) {
                Session::put('admin_locale', session('admin_locale'));
                app()->setLocale(session('admin_locale'));
                return $next($request);
            } else {
               /* $locale = getLocales()->where('default', 1)->first();
                $currenct = config('app.locale');
                if ($locale) {
                    $currenct = $locale->locale;
                }*/
                Session::put('admin_locale', 'en');
                app()->setLocale('en');
                return $next($request);
            }
        }



        /*if (session()->has('locale')) {
            Session::put('locale', session('locale'));
            app()->setLocale(session('locale'));
            return $next($request);
        } else {
            $locale = Locales::where('default', 1)->first();
            $currenct = config('app.locale');
            if ($locale) {
                $currenct = $locale->locale;
            }
            Session::put('locale', $currenct);
            app()->setLocale($currenct);
            return $next($request);
        }*/






    }
}
