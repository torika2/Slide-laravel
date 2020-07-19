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
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
					 @if(Session::has('success'))

                        <div class="alert bg-success-400 text-white" role="alert">
                            {!! Session::get("success") !!}
                        </div>

                    @elseif(Session::has('error'))
                        <div class="alert bg-danger-400 text-white" role="alert">
                            {!! Session::get("error") !!}
                        </div>
                    @endif <br>

                    <div class="panel-hdr">
                        <h2>
                            {{tr('Create Slide')}} <span class="fw-300"><i></i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="{{tr('collapse')}}"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="{{tr('fullscreen')}}"></button>
                        </div>
                    </div>
{{-- - --}}
					<div class="panel-container show">
                        <div class="panel-content">
							<form action="{{ route('addSlide') }}" method="POST" class="w-50 m-auto" enctype="multipart/form-data">
								@csrf
								<div>
									<input type="text" name="firstTitle" class="form-control" placeholder="First title...">
								</div>
								<div>
									<input type="text" name="secondTitle" class="form-control" placeholder="Second title...">
								</div>
								<div>
									<input type="file" name="sliderImage" class="form-control" accept="image/*" data-errormsg="PhotoUploadErrorMsg"  placeholder="First title...">
								</div>
								<div>
									<textarea name="sliderText" id="" cols="20" class="form-control"  placeholder="Slider text..." rows="4"></textarea>
								</div>
								<div>
									<button class="btn btn-primary" >Add slide</button>
								</div>
							</form>
						</div>
					</div>
{{-- - --}}

                </div>
            </div>
 		<div class="kfn_anim k-fadeUp m-t-144 container active-kfn">
			<div class="real-stories">
				{{-- <h2 class="font-55 fira-bold ttl">Slider</h2> --}}
				<div class="swiper-container stories-slider swiper-container-initialized swiper-container-horizontal">
					<div class="kfn_anim k-fadeUp swiper-wrapper active-kfn" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
				     	
				     	@foreach ($sliders as $slider)
					        <div class="swiper-slide" style="width: 342.333px; margin-right: 60px;">
					        	<a href="#">
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
						        	<h3 class="noto-bold font-21 subtitle">{{ $slider->first_title }}</h3>
						        </a>
					        	<div class="text">{{ $slider->text }}</div>
					        	{{-- <div class="noto-bold name">თამარ ტატიშვილი</div> --}}
					        	<div class="d-flex">
					        		<form action="{{ route('editSlide') }}" method="POST">
					        			@csrf
					        			<input type="hidden" name="slideId" value="{{ $slider->slider_id }}">
					        			<button class="btn btn-warning text-white">Edit</button>
					        		</form>
					        	</div>
					        </div>
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
