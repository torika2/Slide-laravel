@extends('app.layout.app')
@section('content')

<div class="today-offer-slider">
	<div class="offer-img">
		<picture>
	        <source media="(max-width: 767px)" srcset="{{asset('assets/img/medi.jpg')}}">
	        <source media="(max-width: 1023px)" srcset="{{asset('assets/img/medi.jpg')}}">
	        <img src="{{asset('assets/img/medi.jpg')}}" class="img-absolute" alt="">
	    </picture>
	    <div class="img-layer"></div>
	</div>

	<div class="offer-box">
		<img src="{{asset('assets/img/offer1.png')}}" alt="">
		<img src="{{asset('assets/img/offer2.png')}}" alt="">
		<img src="{{asset('assets/img/offer3.png')}}" alt="">
		<div class="white-bg"></div>
		<h3 class="offer-box-ttl">Today's Offer</h3>
	</div>
	<div class="content">
		<h2 class="noto-semibold ttl">Enjoy our loyalty program</h2>
		<div class="txt">
			 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
		</div>

		<div class="whiteRed-btn">
			<span class="noto-semibold">Get It Today</span>
		</div>
	</div>
</div>













@endsection
