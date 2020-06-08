<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use App\Models\ContactData\Contact;
use App\Models\ContactData\Partner;
use Image;
use File;
use Gate;

class ImageServiceProvider extends ServiceProvider
{

    public static function getModel($model){
        $data = '';
        $models = collect([
            [
                'name' => 'partner',
                'namespace' => 'App\Models\ContactData\Partner',
            ],
            [
                'name' => 'news',
                'namespace' => 'App\Models\News',
            ],
            [
                'name' => 'contact',
                'namespace' => 'use App\Models\ContactData\Contact',
            ]
        ]);
        if(!$model){
            return false;
        }
        $actualModelData = $models->whereIn('name', $model);
        $data = $actualModelData[0]['namespace'];
        return $data;
    }

    /*
    ** Handle Images
    */
    public static function addImage($ImageData){
        //Params: Model, , Column, thumbs
        $gate   = $ImageData->gate;
        $response = [];

        if (Gate::denies($gate)) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data  = $ImageData->data;
        $id     = $data->id;
        $column = $ImageData->column;
        $folder = isset($ImageData->folder) ? $ImageData->folder : 'images';
        $src = $ImageData->src;
        $img = Image::make($src->getRealPath());
        $destinationPath = 'uploads/'.$folder.'/';
        $thumbs = !empty($ImageData->thumbs) ? $ImageData->thumbs : [];

        if(!$data && !$id && !$column && !$src && !$img){
            $response['status'] = '404';
            $response['message'] = 'data not found!';
            return $response;
        }
        if(isset($ImageData->locale) && $ImageData->locale){
            //
        }else {
            self::removeImage($data, $column, $folder);
        }
        $filename = "img-" . date('H-i-s') . rand(111111, 999999) . '.' . $src->getClientOriginalExtension();

        $directory = self::setDirectory($folder);

        if($directory){
            if($thumbs){
                foreach($thumbs as $key => $thumb){
                    if(isset($thumb['width']) && isset($thumb['thumb']) && $thumb['thumb']){
                        $img->resize($thumb['width'], null, function ($constraint) {
                                $constraint->aspectRatio();
                        })->save(public_path($directory.$thumb['thumb'].'_'.$filename));
                    }elseif(isset($thumb['width']) && ((isset($thumb['thumb']) && !$thumb['thumb']) || !isset($thumb['thumb']))){
                        $img->resize($thumb['width'], null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save(public_path($directory.$filename));
                    }
                    if(isset($thumb['height']) && isset($thumb['thumb']) && $thumb['thumb']){
                        $img->resize(null, $thumb['height'], function ($constraint) {
                            $constraint->aspectRatio();
                        })->save(public_path($directory.$thumb['thumb'].'_'.$filename));
                    }elseif(isset($thumb['height']) && ((isset($thumb['thumb']) && !$thumb['thumb']) || !isset($thumb['thumb']))){
                        $img->resize(null, $thumb['height'], function ($constraint) {
                            $constraint->aspectRatio();
                        })->save(public_path($directory.$filename));
                    }
                }
            }else {
                $img->save(public_path($directory.$filename));
            }
        }

        if(isset($ImageData->locale) && $ImageData->locale){

            $data->setTranslation($column, $ImageData->locale, $filename);

             }
        else {
            $data->{$column} = $filename;
        }

        $data->save();

    }

    public static function addImages($ImageData){

        $gate   = $ImageData->gate;
        $response = [];

        if (Gate::denies($gate)) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->route('CMS.Dashboard');
        }

        $data  = $ImageData->data;
        $id     = $data->id;
        $column = $ImageData->column;
        $folder = isset($ImageData->folder) ? $ImageData->folder : 'images';
        $src = $ImageData->src;
        $relatedColumn = $ImageData->related_column;
        $relatedId = $ImageData->related_id;
        $destinationPath = 'uploads/'.$folder.'/';
        $thumbs = !empty($ImageData->thumbs) ? $ImageData->thumbs : [];

        if(!$data && !$id && !$column && !$src && !$relatedColumn && !$relatedId){
            $response['status'] = '404';
            $response['message'] = 'data not found!';
            return $response;
        }

        $filename = "img-" . date('H-i-s') . rand(111111, 999999) . '.' . $src->getClientOriginalExtension();

        $directory = self::setDirectory($folder);
        $img = Image::make($src->getRealPath());

        if($thumbs){
            foreach($thumbs as $key => $thumb){
                if(isset($thumb['width']) && isset($thumb['thumb']) && $thumb['thumb']){
                    $img->resize($thumb['width'], null, function ($constraint) {
                            $constraint->aspectRatio();
                    })->save(public_path($directory.$thumb['thumb'].'_'.$filename));
                }elseif(isset($thumb['width']) && ((isset($thumb['thumb']) && !$thumb['thumb']) || !isset($thumb['thumb']))){
                    $img->resize($thumb['width'], null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save(public_path($directory.$filename));
                }
                if(isset($thumb['height']) && isset($thumb['thumb']) && $thumb['thumb']){
                    $img->resize(null, $thumb['height'], function ($constraint) {
                        $constraint->aspectRatio();
                    })->save(public_path($directory.$thumb['thumb'].'_'.$filename));
                }elseif(isset($thumb['height']) && ((isset($thumb['thumb']) && !$thumb['thumb']) || !isset($thumb['thumb']))){
                    $img->resize(null, $thumb['height'], function ($constraint) {
                        $constraint->aspectRatio();
                    })->save(public_path($directory.$filename));
                }
            }
        }else {
            $img->save(public_path($directory.$filename));
        }

        $data->{$relatedColumn} =  $relatedId;
        $data->{$column} = $filename;
        $data->save();
    }

    public static function removeImage($data, $column, $folder, $gate = ''){
        $record = $data->{$column};
        if(!empty($record)){
            $file = public_path('/files/'.$folder.'/'.$record);
            $thumbs = public_path('/files/'.$folder. '/thumbs/'.$record);
            if(file_exists($file)){
                File::delete($file);
            }
            if(file_exists($thumbs)){
                File::delete($thumbs);
            }
        }
    }

    public static function removeImages(Request $request){

    }

    public static function setDirectory($folder){
        $path = public_path('/files/'.$folder.'/');
        $thumbs = public_path('/files/'.$folder. '/thumbs/');

        if (!file_exists($path)) {
            mkdir($path, 775, true);
        }
        // if (!file_exists($thumbs)) {
        //     mkdir($thumbs, 775, true);
        // }
        return 'files/'.$folder.'/';
    }
}
