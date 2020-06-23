@extends('app.layout.app')
@section('pageName')home @endsection
@section('content')

<div class="container smart-box-container">
    <div class="left-side">
        <div class="smart-box">
            <div class="heading">
                <h2>
                    <span class="font-55 fira-bold">
                        შეიძინე დაზღვევა ონლაინ
                    </span>
                </h2>
                <div class="tabs-container">
                    <ul>
                        <li class="tab noto-bold active">ყიდვა</li>
                        <li class="tab noto-bold">ანაზღაურება</li>
                        <li class="tab noto-bold">გადახდა</li>
                    </ul>
                </div>
            </div>
            <div class="slider-container">
                <div class="sliders">
                    <div class="slider active">
                        <div class="swiper-container buy-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="img">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-arrows">
                                <div class="swiper-button-prev-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48.914" height="10.828" viewBox="0 0 48.914 10.828">
                                      <g id="Group_600" data-name="Group 600" transform="translate(1.414 1.414)">
                                        <g id="Group_108" data-name="Group 108">
                                          <line id="Line_14" data-name="Line 14" x1="46.5" transform="translate(0 4)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="2"/>
                                          <line id="Line_15" data-name="Line 15" x1="4" y2="4" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="2"/>
                                          <line id="Line_16" data-name="Line 16" x1="4" y1="4" transform="translate(0 4)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="2"/>
                                        </g>
                                      </g>
                                    </svg>
                                </div>
                                <div class="swiper-button-next-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48.914" height="10.828" viewBox="0 0 48.914 10.828">
                                      <g id="Group_599" data-name="Group 599" transform="translate(-974 -1147.086)">
                                        <g id="Group_108" data-name="Group 108" transform="translate(-523 147)">
                                          <line id="Line_14" data-name="Line 14" x2="46.5" transform="translate(1498 1005.5)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="2"/>
                                          <line id="Line_15" data-name="Line 15" x2="4" y2="4" transform="translate(1540.5 1001.5)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="2"/>
                                          <line id="Line_16" data-name="Line 16" y1="4" x2="4" transform="translate(1540.5 1005.5)" fill="none" stroke="#9199b4" stroke-linecap="round" stroke-width="2"/>
                                        </g>
                                      </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider"></div>
                    <div class="slider"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="right-side">
        <div class="image-container">
            <img src="{{asset('assets/img/Skate+.png')}}" alt="">
            <img src="" data-src="{{asset('assets/img/Skate+.png')}}" alt="">
        </div>
    </div>
    <div class="slider--container">
        <div class="item">
            <img src="{{asset('assets/img/social.jpg')}}" alt="">
        </div>
    </div>
</div>

@include('app.layout.components.subMenu')


@include('app.layout.components.ecoistSlider')


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
@include('app.layout.components.newsOuter')
@include('app.layout.components.realStories')
@include('app.layout.components.directionSlider')

@endsection
