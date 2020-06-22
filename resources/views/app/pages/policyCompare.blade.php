@extends('app.layout.app')
@section('pageName')policy-compare @endsection
@section('content')
<section class="head">
    <div class="img-box">
        <picture>
            <source media="(max-width: 767px)" srcset="{{asset('assets/img/sport.jpg')}}">
            <source media="(max-width: 1023px)" srcset="{{asset('assets/img/sport.jpg')}}">
            <img src="{{asset('assets/img/sport.jpg')}}" class="img-absolute" alt="">
        </picture>
        <div class="img-overlay"></div>
    </div>
    <div class="nav">
    	<a href="#">
    		<span>ჩემთვის</span>
    		<svg xmlns="http://www.w3.org/2000/svg" width="6" height="8" viewBox="0 0 6 8">
			  <path id="Polygon_16" data-name="Polygon 16" d="M4,0,8,6H0Z" transform="translate(6) rotate(90)" fill="#fff" opacity="0.8"/>
			</svg>
    	</a>
    	<a href="#">
    		<span>დაზღვევა</span>
    		<svg xmlns="http://www.w3.org/2000/svg" width="6" height="8" viewBox="0 0 6 8">
			  <path id="Polygon_16" data-name="Polygon 16" d="M4,0,8,6H0Z" transform="translate(6) rotate(90)" fill="#fff" opacity="0.8"/>
			</svg>
    	</a>
    	<a href="#">
    		<span>ჯამთელობის დაზღვევა</span>
    		<svg xmlns="http://www.w3.org/2000/svg" width="6" height="8" viewBox="0 0 6 8">
			  <path id="Polygon_16" data-name="Polygon 16" d="M4,0,8,6H0Z" transform="translate(6) rotate(90)" fill="#fff" opacity="0.8"/>
			</svg>
    	</a>
    	<a href="#">
    		<span>პოლისი მედი</span>
    		<svg xmlns="http://www.w3.org/2000/svg" width="6" height="8" viewBox="0 0 6 8">
			  <path id="Polygon_16" data-name="Polygon 16" d="M4,0,8,6H0Z" transform="translate(6) rotate(90)" fill="#fff" opacity="0.8"/>
			</svg>
    	</a>
    </div>
    <h1 class="fira-bold font-55 white ttl">მედი ბაზისური</h1>
    <a href="" class="sign-up-btn">
    	<svg xmlns="http://www.w3.org/2000/svg" width="29" height="29.021" viewBox="0 0 29 29.021">
		  <g id="Group_3s472" data-name="Group 3s472" transform="translate(633 12556.021)">
		    <g id="Rectangle_1557" data-name="Rectangle 1557" transform="translate(-633 -12554)" fill="none" stroke="#fff" stroke-width="2">
		      <rect width="29" height="27" rx="2" stroke="none"/>
		      <rect x="1" y="1" width="27" height="25" rx="1" fill="none"/>
		    </g>
		    <path id="Path_10682" data-name="Path 10682" d="M-15450.782,140.979V145.8" transform="translate(14823 -12696)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
		    <path id="Path_10683" data-name="Path 10683" d="M-15450.782,140.979V145.8" transform="translate(14826 -12696)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
		    <path id="Path_10684" data-name="Path 10684" d="M-15450.782,120.282V145.8" transform="translate(-485.395 2904.17) rotate(90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
		    <path id="Path_10685" data-name="Path 10685" d="M-15450.782,140.979V145.8" transform="translate(14838 -12696)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
		    <path id="Path_10686" data-name="Path 10686" d="M-15450.782,140.979V145.8" transform="translate(14841 -12696)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
		  </g>
		</svg>
		<span class="noto-semibold white">ექიმთან ჩაეწერე</span>
    </a>
</section>
@include('app.layout.components.comparePackages')

@include('app.layout.components.directionSlider')

@include('app.layout.components.serviceScheme')

@include('app.layout.components.findAgent')


@endsection