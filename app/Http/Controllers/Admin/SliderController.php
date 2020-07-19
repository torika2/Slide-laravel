<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Slider\Slider;

class SliderController extends Controller
{

	public function index()
	{
		$sliders = Slider::all();
	
		return view('CMS.Pages.Slider.index', compact('sliders'));

	}

	public function addSlide(Request $request)
	{
		$this->validate($request,[
			'firstTitle' => 'required|string|max:255',
			'secondTitle' => 'required|string|max:255',
			'sliderText' => 'required|string',
			'sliderImage' => 'required|image|mimes:png,jpg,jpeg,svg',
		]);

		if ($request->hasFile('sliderImage')) {
			$imagePath = uniqid().'.'.$request->file('sliderImage')->getClientOriginalExtension();
			$request->sliderImage->move(public_path('sliderImages'),$imagePath);

			Slider::insert([
				'first_title' => $request->input('firstTitle'),
				'second_title' => $request->input('secondTitle'),
				'text' => $request->input('sliderText'),
				'image_path' => $imagePath,

			]);
			 
			return back()->with(['success','successfully created!']);
			
		}


		return back()->with(['error','something went wrong!']);

	}

	public function editSlide(Request $request)
	{
		$this->validate($request,[
			'slideId' => 'required|numeric',
		]);

		$slide = Slider::where('slider_id',$request->input('slideId'))->get();

		return view('CMS.Pages.Slider.edit',compact('slide'));
	}

	public function saveEditedSlide(Request $request)
	{
		$this->validate($request,[
			'slideId' => 'required|numeric',
			'slideFirstTitle' => 'required|string|max:255',
			'slideSecondTitle' => 'required|string|max:255',
			'slideText' => 'required|string'
		]);

		$imagePath = "";

		if ($request->hasFile('slideImage')) {
			$this->validate($request,[
				'slideImage' => 'required|image|mimes:png,jpg,jpeg,svg',
			]);

			
				$imagePath = uniqid().time().'.'.$request->file('slideImage')->getClientOriginalExtension();
				$request->slideImage->move(public_path('assets/sliderImages'),$imagePath);
				foreach (Slider::where('slider_id',$request->input('slideId'))->get() as $slide) {
					\File::delete('assets/sliderImages/'.$slide->image_path);
				}

		}else{
			$imagePath = Slider::select('image_path')->where('slider_id',$request->input('slideId'))->get()[0]['image_path'];
		}

		Slider::where('slider_id',$request->input('slideId'))->update([
			'first_title' => $request->input('slideFirstTitle'),
			'second_title' => $request->input('slideSecondTitle'),
			'text' => $request->input('slideText'),
			'image_path' => $imagePath,
		]);

		return redirect()->route('CMS.Slider');
	}

}
