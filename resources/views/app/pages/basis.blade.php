@extends('app.layout.app')
@section('content')

<div class="today-offer-slider" id="offerSlider">
	<div class="offer-img">
		<div class="slide-img active" data-slide="1">
			<picture >
		        <source media="(max-width: 767px)" srcset="{{asset('assets/img/medi.jpg')}}">
		        <source media="(max-width: 1023px)" srcset="{{asset('assets/img/medi.jpg')}}">
		        <img src="{{asset('assets/img/medi.jpg')}}" class="img-absolute" alt="">
		    </picture>
		</div>

		<div class="slide-img" data-slide="2">
		    <picture>
		        <source media="(max-width: 767px)" srcset="{{asset('assets/img/agent.jpg')}}">
		        <source media="(max-width: 1023px)" srcset="{{asset('assets/img/agent.jpg')}}">
		        <img src="{{asset('assets/img/agent.jpg')}}" class="img-absolute" alt="">
		    </picture>
		</div>

		<div class="slide-img" data-slide="3">
		    <picture>
		        <source media="(max-width: 767px)" srcset="{{asset('assets/img/ltlCommercial.jpg')}}">
		        <source media="(max-width: 1023px)" srcset="{{asset('assets/img/ltlCommercial.jpg')}}">
		        <img src="{{asset('assets/img/ltlCommercial.jpg')}}" class="img-absolute" alt="">
		    </picture>
		</div>

	    <div class="img-layer"></div>
	</div>

	<div class="offer-box">
		<div class="top">
			<div class="left"></div>
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="144" viewBox="0 0 60 144">
			  <defs>
			    <clipPath id="clip-path">
			      <rect id="Rectangle_422" data-name="Rectangle 422" width="60" height="144" transform="translate(-24666 -19082)" fill="#0fe"/>
			    </clipPath>
			  </defs>
			  <g id="Group_2114" data-name="Group 2114" transform="translate(24666 19082)">
			    <g id="Group_2113" data-name="Group 2113" transform="translate(-4994.455 -18966.229)">
			      <path id="Path_61" data-name="Path 61" d="M0,10,10,0" transform="translate(-19643.203 -46.44)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4"/>
			      <path id="Path_60" data-name="Path 60" d="M4.3,4.3,0,0" transform="translate(-19647.5 -40.738)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4"/>
			    </g>
			    <g id="Mask_Group_25" data-name="Mask Group 25" clip-path="url(#clip-path)">
			      <g id="Group_2112" data-name="Group 2112" transform="translate(-24715.002 -19082.002)">
			        <path id="Subtraction_1" data-name="Subtraction 1" d="M1588,432H12A12,12,0,0,1,0,420V12A12,12,0,0,1,12,0H1588a12,12,0,0,1,12,12V420a12,12,0,0,1-12,12ZM53.752,144h0V376.985H1537.79V144H53.752ZM79,49a43.891,43.891,0,0,0-11.712,1.3A15.863,15.863,0,0,0,55.3,62.288,43.883,43.883,0,0,0,54,74c0,9.781,1.68,15.819,5.446,19.578S69.234,99,79,99c9.79,0,15.827-1.672,19.577-5.422S104,83.79,104,74c0-9.766-1.672-15.8-5.423-19.554S88.782,49,79,49Z" transform="translate(0.002 0.002)" fill="#fff"/>
			      </g>
			    </g>
			  </g>
			</svg>
			<div class="right">
				<h3 class="ttl">Today's Offer</h3>

				<a href="#" class="noto-semibold">Discover All Offers</a>
			</div>
		</div>
		<div class="content">
			<div class="offer-slide active" data-slide="1">
				<h2 class="noto-semibold ttl">Enjoy our loyalty 1</h2>
				<div class="txt">
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
				</div>

				<a href="#" class="whiteRed-btn">
					<span class="noto-semibold">Get It Today</span>
				</a>
			</div>

			<div class="offer-slide" data-slide="2">
				<h2 class="noto-semibold ttl">Enjoy our loyalty 2</h2>
				<div class="txt">
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
				</div>

				<a href="#" class="whiteRed-btn">
					<span class="noto-semibold">Get It Today</span>
				</a>
			</div>

			<div class="offer-slide" data-slide="3">
				<h2 class="noto-semibold ttl">Enjoy our loyalty 3</h2>
				<div class="txt">
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
				</div>

				<a href="#" class="whiteRed-btn">
					<span class="noto-semibold">Get It Today</span>
				</a>
			</div>

			<div id="arrow-next">
				<svg xmlns="http://www.w3.org/2000/svg" width="12.013" height="21.906" viewBox="0 0 12.013 21.906">
				  <g id="Group_70" data-name="Group 70" transform="translate(1.061 20.845) rotate(-90)">
				    <path id="Path_61" data-name="Path 61" d="M0,9.892,9.892,0" transform="translate(9.893)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5"/>
				    <path id="Path_60" data-name="Path 60" d="M9.892,9.892,0,0" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5"/>
				  </g>
				</svg>

				<svg class="xer" xmlns="http://www.w3.org/2000/svg" width="14.134" height="24.027" viewBox="0 0 14.134 24.027">
  <g id="Group_70" data-name="Group 70" transform="translate(2.121 21.906) rotate(-90)">
    <path id="Path_61" data-name="Path 61" d="M0,9.892,9.892,0" transform="translate(9.893)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3"/>
    <path id="Path_60" data-name="Path 60" d="M9.892,9.892,0,0" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3"/>
  </g>
</svg>



			</div>
			<div id="arrow-prev" class="active">
				<svg xmlns="http://www.w3.org/2000/svg" width="14.134" height="24.027" viewBox="0 0 14.134 24.027">
				  <g id="Group_748" data-name="Group 748" transform="translate(-20.348 -15.157)">
				    <g id="Group_70" data-name="Group 70" transform="translate(22.469 37.063) rotate(-90)">
				      <path id="Path_61" data-name="Path 61" d="M0,0,9.892,9.892" transform="translate(9.893)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3"/>
				      <path id="Path_60" data-name="Path 60" d="M9.892,0,0,9.892" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3"/>
				    </g>
				  </g>
				</svg>
			</div>	
		</div>
	</div>
	
	<div class="dots">
		<div class="offer-dot active" data-slide="1"></div>
		<div class="offer-dot" data-slide="2"></div>
		<div class="offer-dot" data-slide="3"></div>
	</div>
</div>













@endsection
