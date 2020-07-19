@extends('CMS.layout.cms')

@section('header')

    <title>{{sitename()}} - {{tr('slider')}}</title>
	<link rel="stylesheet" href="{{ asset('assets/css/sliderPage.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/kfn.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/ali.css') }}">
	
@stop

@section('content')

   <main id="js-page-content" role="main" class="page-content">
        <div class="row">
 		<div class="kfn_anim k-fadeUp m-t-144 container active-kfn">
			<div class="real-stories">
				<h2 class="font-55 fira-bold ttl">Slide Edit</h2>
				<div class="swiper-container stories-slider swiper-container-initialized swiper-container-horizontal">
					<div class="kfn_anim k-fadeUp swiper-wrapper active-kfn" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
				     	
				    @foreach ($slide as $slider)
				     	<form action="{{ route('saveEditedSlide') }}" method="POST" enctype="multipart/form-data">
				     		@csrf
				     		<input type="hidden" value="{{ $slider->slider_id }}" name="slideId">
					        <div class="swiper-slide" style="width: 342.333px; margin-right: 60px;">
					       
						        	<div class="img-box">
						        		<picture>
								            <source media="(max-width: 767px)" srcset="{{ asset('assets/sliderImages/'.$slider->image_path) }}">
								            <source media="(max-width: 1023px)" srcset="{{ asset('assets/sliderImages/'.$slider->image_path) }}">
								            <img src="{{ asset('assets/sliderImages/'.$slider->image_path) }}" class="img-absolute" alt="{{ asset('assets/sliderImages/'.$slider->image_path) }}">
								        </picture>
						                <div class="img-layer"></div>
						                <span>
											<span class="noto-bold ttl">ვრცლად</span>
											<svg xmlns="http://www.w3.org/2000/svg" width="7.215" height="12.814" viewBox="0 0 7.215 12.814">
											  <g id="Group_875" data-name="Group 875" transform="translate(-1510.793 -2727.14)">
											    <line id="Line_90" data-name="Line 90" x2="5.649" y2="5.6" transform="translate(1511.652 2727.847)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1"></line>
											    <line id="Line_91" data-name="Line 91" y1="5.801" x2="5.801" transform="translate(1511.5 2733.446)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1"></line>
											  </g>
											</svg>
										</span>
						        	</div>
						        	<div class="d-flex">
								        <input type="file" name="slideImage" class="form-control"> <b>- Not requirable</b>
						        	</div>
						        	<h3 class="noto-bold font-21 subtitle">
						        		<input type="text" class="form-control" name="slideFirstTitle" value="{{ $slider->first_title }}">
						        		<input type="text" class="form-control" name="slideSecondTitle" value="{{ $slider->second_title }}">
						        	</h3>
						     
					        	<div class="text">
									<textarea name="slideText" cols="20" class="form-control" placeholder="{{ $slider->text }}" rows="4">{{ $slider->text }}</textarea>
								</div>
					        	{{-- <div class="noto-bold name">თამარ ტატიშვილი</div> --}}
					        	<br>
					        	<div class="float-right">
					        		<button class="btn btn-success">Save</button>
					        	</div>
					        </div>
					    </form>
				    @endforeach
					    </div>

					<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
					<div class="opacity"></div>
				</div>
			</div>
        </div>
    </main>
@endsection


@section('scripts')


@stop
