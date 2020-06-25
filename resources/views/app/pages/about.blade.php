@extends('app.layout.app')

@section('content')


<div class="about-container">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="image">
					<img src="{{asset('assets/img/img (17).jpg')}}" alt="">
					<h2 class="font-55 fira-bold uppercase">კომპანიის შესახებ</h2>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="image">
					<img src="{{asset('assets/img/img (17).jpg')}}" alt="">
					<h2 class="font-55 fira-bold uppercase">კომპანიის შესახებ</h2>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="image">
					<img src="{{asset('assets/img/img (17).jpg')}}" alt="">
					<h2 class="font-55 fira-bold uppercase">კომპანიის შესახებ</h2>
				</div>
			</div>
		</div>
		<div class="swiper-button-prev_">
			<svg xmlns="http://www.w3.org/2000/svg" width="16.757" height="31.569" viewBox="0 0 16.757 31.569">
			  <g id="Group_845" data-name="Group 845" transform="translate(1527.55 2758.708) rotate(180)">
			    <line id="Line_90" data-name="Line 90" x2="14.942" y2="14.811" transform="translate(1511.901 2727.847)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="1"/>
			    <line id="Line_91" data-name="Line 91" y1="15.343" x2="15.343" transform="translate(1511.5 2742.658)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="1"/>
			  </g>
			</svg>
		</div>
	    <div class="swiper-button-next_">
			<svg xmlns="http://www.w3.org/2000/svg" width="16.757" height="31.569" viewBox="0 0 16.757 31.569">
			  <g id="Group_845" data-name="Group 845" transform="translate(-1510.793 -2727.14)">
			    <line id="Line_90" data-name="Line 90" x2="14.942" y2="14.811" transform="translate(1511.901 2727.847)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="1"/>
			    <line id="Line_91" data-name="Line 91" y1="15.343" x2="15.343" transform="translate(1511.5 2742.658)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="1"/>
			  </g>
			</svg>
	    </div>
	</div>
	<div class="buttons">
		<div class="button">
			<span class="font-21 fira-bold uppercase">ისტორია</span>
		</div>
		<div class="button">
			<span class="font-21 fira-bold uppercase">მედია</span>
		</div>
		<div class="button">
			<span class="font-21 fira-bold uppercase">კარიერა</span>
		</div>
	</div>
</div>
@include('app.layout.components.companyHistory')
@include('app.layout.components.missionBanner')
@include('app.layout.components.bonusServices')

<section class="became-member find-agent m-t-233 kfn_anim k-fadeUp">
    <div class="img-box imgg">
        <picture>
            <source media="(max-width: 767px)" srcset="{{asset('assets/img/img (42).jpg')}}">
            <source media="(max-width: 1023px)" srcset="{{asset('assets/img/img (42).jpg')}}">
            <img src="{{asset('assets/img/img (42).jpg')}}" class="img-absolute" alt="">
        </picture>
        <div class="img-overlay"></div>
    </div>
    <div class="container component-content flex-box column">
        <img src="{{asset('assets/img/vig.png')}}" alt="" class="banner-logo">
        <p class="font-21 white fira-medium">არაუშავს, ჩვენი დაზღვევის აგენტი სწრაფად <br> შეგარჩევინებს პაკეტს</p>
        <div class="bottom-line"></div>
        <div class="component-btns flex-box">
            <a href="#" class="btn-white">ვრცლად</a>
        </div>
    </div>
</section>

@include('app.layout.components.newsOuter')
@include('app.layout.components.fullWidthNews')
@include('app.layout.components.becomeMember')
@include('app.layout.components.partnersSlider')

<div class="awards-container m-t-144">
    <div class="heading">
        <h2 class="font-34 fira-bold">ჯილდოები</h2>
    </div>
    <div class="main-content">
        <div class="row">
            <div class="side">
                <a href="">
                    <h2 class="font-21 noto-bold">The British Insurance Awards</h2>
                    <div class="desc">
                        <div class="year noto-bold font-16">2019</div>
                        <div class="text">საუკეთესო სადაზღვევო კომპანია აღმოსავლეთ ევროპა</div>
                    </div>
                </a>
                <svg class="" xmlns="http://www.w3.org/2000/svg" width="1555.746" height="0.5" viewBox="0 0 1555.746 0.5">
	              <path id="Path_9264" data-name="Path 9264" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
	            </svg>
            </div>
            <div class="side">
                <a href="">
                    <h2 class="font-21 noto-bold">The British Insurance Awards</h2>
                    <div class="desc">
                        <div class="year noto-bold font-16">2019</div>
                        <div class="text">საუკეთესო სადაზღვევო კომპანია აღმოსავლეთ ევროპა</div>
                    </div>
                </a>
                <svg class="" xmlns="http://www.w3.org/2000/svg" width="1555.746" height="0.5" viewBox="0 0 1555.746 0.5">
	              <path id="Path_9264" data-name="Path 9264" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
	            </svg>
            </div>
            <svg class="drop-line" xmlns="http://www.w3.org/2000/svg" width="1555.746" height="0.5" viewBox="0 0 1555.746 0.5">
              <path id="Path_9264" data-name="Path 9264" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
            </svg>
            <svg class="center-line" xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
              <path id="Path_10029" data-name="Path 10029" d="M655-7923.56h24.532" transform="translate(-7923.309 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
            </svg>

        </div>
        <div class="row">
            <div class="side">
                <a href="">
                    <h2 class="font-21 noto-bold">The British Insurance Awards</h2>
                    <div class="desc">
                        <div class="year noto-bold font-16">2019</div>
                        <div class="text">საუკეთესო სადაზღვევო კომპანია აღმოსავლეთ ევროპა</div>
                    </div>
                </a>
                <svg class="" xmlns="http://www.w3.org/2000/svg" width="1555.746" height="0.5" viewBox="0 0 1555.746 0.5">
	              <path id="Path_9264" data-name="Path 9264" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
	            </svg>
            </div>
            <div class="side">
                <a href="">
                    <h2 class="font-21 noto-bold">The British Insurance Awards</h2>
                    <div class="desc">
                        <div class="year noto-bold font-16">2019</div>
                        <div class="text">საუკეთესო სადაზღვევო კომპანია აღმოსავლეთ ევროპა</div>
                    </div>
                </a>
                <svg class="" xmlns="http://www.w3.org/2000/svg" width="1555.746" height="0.5" viewBox="0 0 1555.746 0.5">
	              <path id="Path_9264" data-name="Path 9264" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
	            </svg>
            </div>
            <svg class="drop-line" xmlns="http://www.w3.org/2000/svg" width="1555.746" height="0.5" viewBox="0 0 1555.746 0.5">
              <path id="Path_9264" data-name="Path 9264" d="M655-7923.56H2210.246" transform="translate(-654.75 7923.81)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
            </svg>
            <svg class="center-line" xmlns="http://www.w3.org/2000/svg" width="1" height="25.032" viewBox="0 0 0.5 25.032">
              <path id="Path_10029" data-name="Path 10029" d="M655-7923.56h24.532" transform="translate(-7923.309 -654.75) rotate(90)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="0.5" stroke-dasharray="5"/>
            </svg>
        </div>
    </div>
</div>

@endsection
