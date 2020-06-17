@extends('app.layout.app')
@section('pageName')business @endsection
@section('content')

<section class="head-slider">
	<div class="slides-wrap">
		<div class="slide active" data-slide="0">
			<picture>
	            <source media="(max-width: 767px)" srcset="http://gpi.test/assets/img/img (33).jpg">
	            <source media="(max-width: 1023px)" srcset="http://gpi.test/assets/img/img (33).jpg">
	            <img src="http://gpi.test/assets/img/img (33).jpg" class="img-absolute" alt="">
	        </picture>
	        <div class="img-layer"></div>
		</div>
		<div class="slide" data-slide="1">
			<picture>
	            <source media="(max-width: 767px)" srcset="http://gpi.test/assets/img/sport.jpg">
	            <source media="(max-width: 1023px)" srcset="http://gpi.test/assets/img/sport.jpg">
	            <img src="http://gpi.test/assets/img/sport.jpg" class="img-absolute" alt="">
	        </picture>
	        <div class="img-layer"></div>
		</div>
		<div class="slide" data-slide="2">
			<picture>
	            <source media="(max-width: 767px)" srcset="http://gpi.test/assets/img/caseInner.jpg">
	            <source media="(max-width: 1023px)" srcset="http://gpi.test/assets/img/caseInner.jpg">
	            <img src="http://gpi.test/assets/img/caseInner.jpg" class="img-absolute" alt="">
	        </picture>
	        <div class="img-layer"></div>
		</div>
		<div class="slide">
			<picture>
	            <source media="(max-width: 767px)" srcset="http://gpi.test/assets/img/agent.jpg">
	            <source media="(max-width: 1023px)" srcset="http://gpi.test/assets/img/agent.jpg">
	            <img src="http://gpi.test/assets/img/agent.jpg" class="img-absolute" alt="">
	        </picture>
	        <div class="img-layer"></div>
		</div>
	</div>
	<h1 class="fira-bold font-55 white ttl">წარმატებული ბიზნესისთვის</h1>

	 <div class="slide-btn-wrap">
	 	<div class="slide-btn" data-slide="1">
	 		<div class="top">
	 			<span class="fira-bold font-21">ინდუსტრია</span>
	 		</div>

			<div class="txt">
				<span class="noto-bold white">
					შეარჩიე სადაზღვეო პაკეტი შენი
					ინდუსტრიის მიხედვით
				</span>
			</div>

	 		<div class="dot" style="background-color: #6768FF"></div>

	 		<div class="more">
	 			<div></div>
	 			<span class="noto-bold white">გაიგე მეტი</span>
	 		</div>
	 	</div>

	 	<div class="slide-btn" data-slide="2">
	 		<div class="top">
	 			<span class="fira-bold font-21">ინდუსტრია</span>
	 		</div>

			<div class="txt">
				<span class="noto-bold white">
					შეარჩიე სადაზღვეო პაკეტი შენი
					ინდუსტრიის მიხედვით
				</span>
			</div>

	 		<div class="dot" style="background-color: #6768FF"></div>

	 		<div class="more">
	 			<div></div>
	 			<span class="noto-bold white">გაიგე მეტი</span>
	 		</div>
	 	</div>
	 </div>
</section>

<div style="height: 500vh;"></div>

@endsection