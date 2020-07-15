<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Clients\Clients;
use App\Models\Home\WelyHube;
use App\Models\Partners\Partners;
use App\Models\Privacy\Privacy;
use App\Models\Product\Details;
use App\Models\Product\Included;
use App\Models\Product\Products;
use App\Models\Seo\Seo;
use App\Models\Software\Pricing;
use App\Models\Software\PricingParams;
use App\Models\Software\Software;
use App\Models\StaticData\StaticData;
use App\Models\UseCase\Container;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\View;

class ShopController extends Controller
{

    public function index(Request $request, $locale = null)
    {
        $seo = Seo::where('module', 'shop')->first();
        $data['seo'] = $seo;


        $query = Products::query();
        if ($request->filter) {
            $query->where('title->' . App::getLocale(), 'LIKE', '%' . $request->filter . '%')
                ->orwhere(function ($query) use ($request) {
                    $query->where('short_text->'.App::getLocale(), 'LIKE', '%' . $request->filter . '%');
                })
                ->orwhere(function ($query) use ($request) {
                    $query->where('text->'.App::getLocale(), 'LIKE', '%' . $request->filter . '%');
                })
                ->orwhere(function ($query) use ($request) {
                    $query->where('description->'.App::getLocale(), 'LIKE', '%' . $request->filter . '%');
                });
        }

        if ($request->sort) {
            if ($request->sort == 'price_up') {
                $query->orderBy('price', 'DESC');
            }
            if ($request->sort == 'price_down') {
                $query->orderBy('price', 'ASC');
            }

            if ($request->sort == 'new') {
                $query->orderBy('created_at', 'DESC');
            }

        } else {
            $query->orderBy('ord', 'ASC');
        }


        $products = $query->paginate(4);

        $data['products'] = $products;

        $staticData = StaticData::where('module', 'products')->first();
        $data['staticData'] = $staticData;


        $useCases = Container::orderBy('ord', 'ASC')->get();
        $data['useCases'] = $useCases;


        $alternativeLang = getLocales(true)->where('locale', '!=', App::getLocale())->first();
        $data['alternativeLang'] = route('app.shop', [$alternativeLang->locale]);


        $hube = WelyHube::orderBy('ord', 'ASC')->take(3)->get();
        $data['welyhube'] = $hube;

        $data = (object)$data;
        View::share('module', 'shop');


        return view('app.pages.shop', compact('data'));
    }


    public function product(Request $request, $locale = null, $slug = null)
    {


        $staticData = StaticData::where('module', 'products')->first();
        $data['staticData'] = $staticData;

        $product = Products::where('slug->' . App::getLocale(), $slug)->with('links', 'links')->firstOrFail();
        $data['product'] = $product;

        $details = Details::orderBy('ord', 'ASC')->get();
        $data['details'] = $details;

        $includes = Included::orderBy('ord', 'ASC')->get();
        $data['included'] = $includes;

        $alternativeLang = getLocales(true)->where('locale', '!=', App::getLocale())->first();
        $alternativeSlug = $product->getTranslation('slug', $alternativeLang->locale);
        $data['alternativeLang'] = route('app.product', [$alternativeLang->locale, $alternativeSlug]);


        $products = Products::orderBy('ord', 'ASC')->take(2)->where('id', '!=', $product->id)->get();
        $data['products'] = $products;

        $staticData = StaticData::where('module', 'products')->first();
        $data['staticData'] = $staticData;
        $data = (object)$data;

        View::share('module', 'shop');


        return view('app.pages.productInner', compact('data'));

    }
}
