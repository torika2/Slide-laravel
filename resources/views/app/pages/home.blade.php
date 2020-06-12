@extends('app.layout.app')

@section('content')


<section class="became-member m-t-233">
    <div class="img-box imgg">
        <picture>
            <source media="(max-width: 767px)" srcset="{{asset('assets/img/became.png')}}">
            <source media="(max-width: 1023px)" srcset="{{asset('assets/img/became.png')}}">
            <img src="{{asset('assets/img/became.png')}}" class="img-absolute" alt="">
        </picture>
        <div class="img-overlay"></div>
    </div>
    <div class="component-content flex-box column al-center justify-center">
        <h2 class="flex-box column justify-center">
            <span class="fira-bold font-89 white">გახდი</span>
            <span class="fira-bold font-55 white">ჩვენი გუნდის წევრი</span>
        </h2>
        <div class="bottom-line"></div>
        <div class="component-btns flex-box">
            <a href="#" class="btn-white">რატომ ჯიპიაი?</a>
            <a href="#" class="btn-white">ვაკანსიები</a>
        </div>
    </div>
</section>

@include('app.layout.components.faqSlider')


<section class="social-banner m-t-144">
    <div class="img-box imgg">
        <picture>
            <source media="(max-width: 767px)" srcset="{{asset('assets/img/social.jpg')}}">
            <source media="(max-width: 1023px)" srcset="{{asset('assets/img/social.jpg')}}">
            <img src="{{asset('assets/img/social.jpg')}}" class="img-absolute" alt="">
        </picture>
        <div class="img-overlay"></div>
    </div>
    <div class="container banner-content flex-box column">
        <h2 class="fira-bold font-55 white">
            ჩვენი სოციალური <br> პასუხისმგებლობა
        </h2>
        <a href="#" class="btn-white">გაიგე მეტი</a>
    </div>
</section>

@include('app.layout.components.videoContainer')
@include('app.layout.components.ecoistSlider')
@include('app.layout.components.subMenu')
@include('app.layout.components.newsOuter')
@include('app.layout.components.directionSlider')
@include('app.layout.components.realStories')
@endsection
