<?php

namespace App\Http\Controllers\Admin\StaticData;

use App\Http\Controllers\Admin\Controller;
use App\Providers\ImageServiceProvider as imageHandle;
use Illuminate\Http\Request;
use App\Models\StaticData\StaticData;
use Gate;

class StaticDataController extends Controller
{


    public function update(Request $request)
    {
        if (Gate::denies('updateStaticData')) {
            session()->flash('error', tr('you dont have permission To Access!'));
            return redirect()->back();
        }
        $valid = [
            'banner' => 'nullable|image',
            'module' => 'required|exists:static,module'
        ];
        $locales = getLocales();
        foreach ($locales as $locale) {
            if ($locale->active == 1) {
                $valid['h1_' . $locale->locale] = 'required|string';
            }
        }
        request()->validate($valid);

        $data = StaticData::where('module',$request->module)->first();
        foreach ($locales as $locale) {
            $data->setTranslation('h1', $locale->locale, $request->input('h1_' . $locale->locale));
        }

        $data->save();
        if($request->banner){
            $imageData = [
                'gate'      => 'updateStaticData',
                'data'      => $data,
                'column'    => 'banner',
                'folder'    => 'img',
                'src'       => $request->file('banner'),
                'thumbs'    => [],
                'webp' => true,
            ];
            imageHandle::addImage((object) $imageData);
        }
        session()->flash('success', tr('data updated successfully'));
        return redirect()->back();
    }
}
