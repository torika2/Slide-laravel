<?php

namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Http\Request;
use App\Providers\ImageServiceProvider as imageHandle;
use App\Models\Seo\Seo;
use App\Models\About\About;
use App\Models\UseCase\Industry;
use App\Models\UseCase\UseCases;
use Image;
use File;
use Gate;

class FunctionsController extends Controller
{
    public function setActive(Request $request) //, $model, $id, $value, $column = 'active'
    {
        $model = $request['model'];
        $id = $request['id'];
        $column = $request['column'];
        $value = $request['value'];
        $single = (bool) $request['single'];

        if(!$model && !$id && !$value){
            $response['status'] = '404';
            $response['message'] = 'data not found!';
            return $response;
        }

        $modelObj = $this->getModel($model);
        $response = [];
        if($modelObj){
            $data = $modelObj::findOrFail($id);
            if(!$data){
                $response['status'] = '404';
                $response['message'] = 'data not found!';
                return $response;
            }

            if($single){
                $allRecord = $modelObj::where('id', '!=', $id)->where($column, 1)->get();
                foreach($allRecord as $row){
                    $row->{$column} = 0;
                    $row->save();
                }
                $ids = $allRecord->pluck('id')->toArray();
                $response['singleData'] = $ids;
            }
            $data->{$column} = $value;
            $data->save();
            $response['status'] = '201';
            $response['message'] = 'data updated successfully!';
        }
        return $response;
    }

    public function setSortable(Request $request){
        $response = [];
        $model = $request['model'];
        $data = $request['data'];
        $column = isset($request['column']) && $request['column'] ? $request['column'] : 'ord';
        $modelObj = $this->getModel($model);
        if(!$model || empty($data) || !$modelObj){
            $response['status'] = '404';
            $response['message'] = 'Model or data not found!';
            return $response;
        }
        $data = (object) $data;

        foreach($data as  $item){
            $row = $modelObj::find($item['id']);
            $row->{$column} = $item['newPos'];
            $row->save();
        }
        $response['model'] = $modelObj;
        $response['status'] = '201';
        $response['message'] = 'data sorted successfully!';
        return $response;
    }

    public function removeModelImg(Request $request){
        $id     = $request['id']    ? $request['id'] : 0;
        $gate   = $request['gate']  ? $request['gate'] : null;
        $model  = $request['model'] ? $request['model'] : null;
        $column = $request['column'] ? $request['column'] : '';
        $folder = $request['folder'] ? $request['folder'] : '';
        $lang = isset($request['locale']) && $request['locale'] ? $request['locale'] : false;
        $modelRemove = $request['modelRemove'] && ($request['modelRemove'] != "false")  ? true : false;

        if(!$id && !$gate && !$model && !$column && !$folder){
            $response = [
                'statusCode' => 404,
                'message' => 'Data is not provided!'
            ];
            return response()->json($response);
        }
        if (Gate::denies($gate)) {
            $response = [
                'statusCode' => 404,
                'message' => 'you dont have permission To Access!'
            ];
            return response()->json($response);
        }
        $modelObj = $this->getModel($model);
        $data = $modelObj::find($id);


        if(!$data){
            $response = [
                'statusCode' => 404,
                'message' => 'Record is not provided!'
            ];
            return response()->json($response);
        }
         imageHandle::removeImage($data, $column, $folder);

        if($modelRemove){
            $data->delete();
        }else if($lang) {
            imageHandle::removeImage($data, $column, $folder,'',$lang);
            $data->setTranslation($column,$lang,null);

            $data->save();

        }else{
            $data->{$column} = null;
            $data->save();
        }

        $response = [
            'statusCode' => 200,
            'model' => $model,
            'message' => 'image was deleted',
        ];

        return response()->json($response);
    }

    public function sortImages(Request $request){
        $gate   = $request['gate']  ? $request['gate'] : null;
        $model  = $request['model'] ? $request['model'] : null;
        $data   = $request['data'] ? $request['data'] : [];

        if(!empty($data)){
            $modelObj = $this->getModel($model);
            foreach($data as $item){
                $record = $modelObj::find($item['id']);
                $record->ord = $item['position'];
                $record->save();
            }
            return response()->json(['msg' => 'image sorting done!']);
        }
        else {
            return response()->json(['msg' => 'data is not produced!']);
        }
    }

    public function removeModelVideo(Request $request){

        $model = $this->getModel($request['model']);
        $id = $request['id'];
        $column = $request['column'];
        $folder = $request['folder'];
        $fullremove = $request['fullremove'] == "false" ? false : true;

        if(!$model && !$id && !$column){
            return response()->json(['msg' => 'data is not produced!']);
        }

        if(!$fullremove){
            $data = $model::find($id);

            $file = public_path('/files/'.$folder.'/'.$data->{$column});
            if(file_exists($file)){
                File::delete($file);
            }

            $data->{$column} = null;
            $data->save();
            $response = [
                'statusCode' => 200,
                'message' => 'video was deleted',
            ];

            return response()->json($response);
        }

    }

    public function getModel($model){
        $data = '';

        $models = collect([

            [
                'name' => 'software',
                'namespace' => 'App\Models\Software\Software',
            ],


            [
                'name' => 'welyhube',
                'namespace' => 'App\Models\Home\WelyHube',
            ],

            [
                'name' => 'advantagestatic',
                'namespace' => 'App\Models\Home\AdvantageStatic',
            ],

            [
                'name' => 'advantage',
                'namespace' => 'App\Models\Home\Advantage',
            ],
            [
                'name' => 'homehead',
                'namespace' => 'App\Models\Home\Head',
            ],


            [
                'name' => 'homesoftware',
                'namespace' => 'App\Models\Home\SoftwareComponent',
            ],



            [
                'name' => 'products',
                'namespace' => 'App\Models\Product\Products',
            ],

            [
                'name' => 'productimages',
                'namespace' => 'App\Models\Product\ProductImages',
            ],



            [
                'name' => 'projects',
                'namespace' => 'App\Models\Projects\Projects',
            ],
            [
                'name' => 'ucindustry',
                'namespace' => 'App\Models\UseCase\Industry',
            ],
            [
                'name' => 'usecase',
                'namespace' => 'App\Models\UseCase\UseCases',
            ],


            [
                'name' => 'usecasecontainer',
                'namespace' => 'App\Models\UseCase\Container',
            ],


            [
                'name' => 'projectimages',
                'namespace' => 'App\Models\Projects\ProjectImages',
            ],

            [
                'name' => 'clients',
                'namespace' => 'App\Models\Clients\Clients',
            ],
            [
                'name' => 'solutions',
                'namespace' => 'App\Models\Solutions\Solutions',
            ],
            [
                'name' => 'seo',
                'namespace' => 'App\Models\Seo\Seo',
            ],

            [
                'name' => 'staticdata',
                'namespace' => 'App\Models\StaticData\StaticData',
            ],

            [
                'name' => 'about',
                'namespace' => 'App\Models\About\About',
            ],

        ]);

        if(!$model){
            return false;
        }
        $actualModelData = $models->whereIn('name', strtolower($model));
        $data = $actualModelData->first()['namespace'];
        return $data;
    }
}
