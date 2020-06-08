@extends('app.layout.app')

@section('content')


<section class="became-member m-t-233">
    <div class="img-box">
        <img src="img/img (6).jpg" alt="" class="img-absolute">
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

<section class="container faq-section m-t-144">
    <div class="faq-title fira-bold font-55">ხშირად აინტერესებთ</div>
    <div class="faq-subtitle font-21">აირჩიე კატეგორია</div>
    <div class="faq-slider swiper-container">
        <div class="swiper-wrapper">
            <a href="#" class="swiper-slide">
                <div class="slider-num fira-bold font-89">
                    01
                </div>
                <div class="slider-title font-21 noto-bold">
                    დაფარვის ზონა
                </div>
            </a>
            <a href="#" class="swiper-slide">
                <div class="slider-num fira-bold font-89">
                    02
                </div>
                <div class="slider-title font-21 noto-bold">
                    სამოგზაურო დაზღვევა
                </div>
            </a>
            <a href="#" class="swiper-slide">
                <div class="slider-num fira-bold font-89">
                    03
                </div>
                <div class="slider-title font-21 noto-bold">
                    როგორ ავანაზღაურო
                </div>
            </a>
            <a href="#" class="swiper-slide">
                <div class="slider-num fira-bold font-89">
                    04
                </div>
                <div class="slider-title font-21 noto-bold">
                    პროვაიდერი კლინიკები
                </div>
            </a>
            <a href="#" class="swiper-slide">
                <div class="slider-num fira-bold font-89">
                    05
                </div>
                <div class="slider-title font-21 noto-bold">
                    პროვაიდერი კლინიკები დაფარვის ზონა
                </div>
            </a>
            <a href="#" class="swiper-slide">
                <div class="slider-num fira-bold font-89">
                    06
                </div>
                <div class="slider-title font-21 noto-bold">
                    დაფარვის ზონა პროვაიდერი კლინიკები
                </div>
            </a>
        </div>
    </div>
</section>


<section class="social-banner m-t-144">
    <div class="img-box">
        <img src="img/img (6).jpg" alt="" class="img-absolute">
        <div class="img-overlay"></div>
    </div>
    <div class="banner-content flex-box column">
        <h2 class="fira-bold font-55 white">
            ჩვენი სოციალური <br> პასუხისმგებლობა
        </h2>
        <a href="#" class="btn-white">გაიგე მეტი</a>
    </div>
</section>

@include('app.layout.components.ecoistSlider')

@endsection
