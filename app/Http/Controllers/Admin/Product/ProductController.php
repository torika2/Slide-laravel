<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Admin\Controller;
use App\Models\Product\Details;
use App\Models\Product\ProductImages;
use App\Models\Product\ProductLinks;
use App\Models\StaticData\StaticData;
use Illuminate\Http\Request;
use App\Providers\ImageServiceProvider as imageHandle;
use App;
use Gate;
use Illuminate\Support\Str;
use Response;
use Validator;
use Session;
use App\Models\Software\Software;
use App\Models\Software\Pricing;
use App\Models\Product\Products;

class ProductController extends Controller
{


    public function index()
    {
        if (Gate::denies('viewProduct')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = Products::orderBy('ord', 'DESC')->get();

        if (request()->ajax()) {

            return datatables()->collection($data)
                ->addColumn('action', function ($row) {
                    return '<a href="' . route('CMS.product.update', $row->id) . '" class="btn btn-success edit"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        $staticData = StaticData::where('module','products')->first();
        return view('CMS.Pages.Product.list',compact('staticData'));
    }


    public function create()
    {
        if (Gate::denies('createProduct')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $details = Details::orderBy('ord','ASC')->get();

        return view('CMS.Pages.Product.create',compact('details'));
    }


    public function update($id)
    {
        if (Gate::denies('updateProduct')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $data = Products::findOrFail($id);
        $gallery = $data->images()->orderBy('ord','ASC')->get();
        $details = Details::orderBy('ord','ASC')->get();
        return view('CMS.Pages.Product.create', compact('data','gallery','details'));
    }


    public function store(Request $request)
    {

        if ($request->id) {
            if (Gate::denies('updateProduct')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        } else {
            if (Gate::denies('createProduct')) {
                session()->flash('error', tr('you dont have permission To Access!'));
                return redirect()->route('CMS.Dashboard');
            }
        }


        $locales = getLocales();

        if ($request->id) {
            $valid['id'] = "required|exists:products,id";

        }

        foreach ($locales as $loc) {
            if ($loc->active == 1) {
                $valid['title_' . $loc->locale] = 'required|string';
                $valid['short_text_' . $loc->locale] = 'required|string';
                $valid['text_' . $loc->locale] = 'required|string';
                $valid['description_' . $loc->locale] = 'required|string';
            }
        }

        request()->validate($valid);

        if ($request->id) {
            $data = Products::find($request->id);
        } else {
            $data = new Products();
        }
        foreach ($locales as $locale) {
            $data->setTranslation('title', $locale->locale, $request->input('title_' . $locale->locale));
            $data->setTranslation('meta_description', $locale->locale, $request->input('meta_description_' . $locale->locale));
            $data->setTranslation('meta_keywords', $locale->locale, $request->input('meta_keywords_' . $locale->locale));
            $data->setTranslation('short_text', $locale->locale, $request->input('short_text_' . $locale->locale));
            $data->setTranslation('text', $locale->locale, $request->input('text_' . $locale->locale));
            $data->setTranslation('description', $locale->locale, $request->input('description_' . $locale->locale));
            $data->setTranslation('slug',$locale->locale,str::slug($request->input('title_' . $locale->locale) . ' ' . $data->id));
        }
        $data->details = $request->details;
        $data->price = $request->price;
        $data->sale_price = $request->sale_price;
        if ($request->stock){
            $data->stock = $request->stock;
        }else{
            $data->stock = 0;
        }

        $data->save();




        if($request->cover){
            $imageData = [
                'gate'      => 'updateProduct',
                'data'      => $data,
                'column'    => 'cover',
                'folder'    => 'img',
                'src'       => $request->file('cover'),
                'thumbs'    => [],
                'webp' => true,
            ];
            imageHandle::addImage((object) $imageData);
        }


        if ($request->image) {
            foreach ($request->image as $img) {
                $galleryObj = new ProductImages();
                $imageData = [
                    'gate' => 'updateProduct',
                    'data' => $galleryObj,
                    'column' => 'image',
                    'folder' => 'img',
                    'src' => $img,
                    'thumbs'    => [['width' => 109]],
                    'related_column' => 'product_id',
                    'related_id' => $data->id,
                    'webp'=>true
                ];
                imageHandle::addImages((object)$imageData);
            }
        }


        if ($request->id) {
            session()->flash('success', tr('Data updated successfully!'));
        } else {
            session()->flash('success', tr('Data created successfully!'));
        }

        return redirect()->route('CMS.product.list');
    }


    public function delete(Request $request)
    {
        if (Gate::denies('updateProduct')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $data = Products::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function reOrder(Request $request)
    {
        foreach ($request->rows as $row) {
            $id = $row['id'];
            $ord = $row['position'];
            $data = Products::find($id);
            if ($data) {
                $data->update(['ord' => $ord]);
            }
        }
    }






    public function deleteLink(Request $request)
    {
        if (Gate::denies('updateProduct')) {
            return response()->json(['error' => tr('you dont have permission To Access!')]);
        }
        $data = ProductLinks::findOrFail($request->id);
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function reOrderLink(Request $request)
    {
        foreach ($request->rows as $row) {
            $id = $row['id'];
            $ord = $row['position'];
            $data = ProductLinks::find($id);
            if ($data) {
                $data->update(['ord' => $ord]);
            }
        }
    }


    public function links($id)
    {
        if (Gate::denies('viewProduct')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data = Products::findOrFail($id);

        if (request()->ajax()) {

            return datatables()->collection($data->links)
                ->addColumn('action', function ($row) {
                    return '<a href="" data-id="'.$row->id.'" class="btn btn-success editLinks"> <i class="fal fa-pen"></i> </a>
                            <a href="javascript:void(0);" id="delete-data" data-toggle="tooltip"
                            data-original-title="Delete" data-id="' . $row->id . '" class="delete btn btn-danger"> <i class="fal fa-times"></i> </a>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }


    }


    public function linksStore(Request $request,$id){


        if (Gate::denies('updateProduct')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        if ($request->action == 'new'){
            $link = New ProductLinks();
        }else {
            $link = ProductLinks::findOrFail($request->id);
        }

        $link->title = $request->title;
        $link->product_id = $id;
        $link->link = $request->link;
        $link->save();

        if($request->image){
            $imageData = [
                'gate'      => 'updateProduct',
                'data'      => $link,
                'column'    => 'image',
                'folder'    => 'img',
                'src'       => $request->file('image'),
                'thumbs'    => [],
                'webp' => true,
            ];
            imageHandle::addImage((object) $imageData);
        }

       if ($link){
           return Response()->json(['success'=>tr('link added successfully')]);
       }else{
           return Response()->json(['error'=>tr('something went wrong!')]);
       }
    }

    public function linkGet(Request $request){
        if (Gate::denies('updateProduct')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }
        $link = ProductLinks::find($request->id);
        return $link;

    }

}
