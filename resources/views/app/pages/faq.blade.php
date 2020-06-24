@extends('app.layout.app')
@section('pageName')faq @endsection
@section('content')
<section class="head-banner policy-medi kfn_anim k-fadeUp">
    <div class="img-box imgg">
        <picture>
            <source media="(max-width: 767px)" srcset="{{asset('assets/img/medi.jpg')}}">
            <source media="(max-width: 1023px)" srcset="{{asset('assets/img/medi.jpg')}}">
            <img src="{{asset('assets/img/medi.jpg')}}" class="img-absolute" alt="">
        </picture>
        <div class="img-overlay"></div>
    </div>
    <div class="container-secondary banner-content flex-box column">
        <nav class="banner-links flex-box al-center">
            <a href="#" class="flex-box al-center font-13 noto-semibold">ჩემთვის</a>
            <a href="#" class="flex-box al-center font-13 noto-semibold">დაზღვევა</a>
            <a href="#" class="flex-box al-center font-13 noto-semibold">ჯანმრთელობის დაზღვევა</a>
        </nav>
        <h1 class="fira-bold font-55 white">
            ხშირად აინტერესებთ
        </h1>
    </div>
</section>

<section class="container-secondary policy-packages kfn_anim k-fadeUp">
    <div class="packages-outer">
        <h2 class="faq-title font-34 fira-bold">დამატებითი ინფორმაციის მისაღებად</h2>
        <div class="faq-subtitle font-21">აირჩიე კატეგორია</div>
        <div class="faq-slider">
        <div class="faq-outer">
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
                     კლინიკები
                </div>
            </a>
            <a href="#" class="swiper-slide">
                <div class="slider-num fira-bold font-89">
                    06
                </div>
                <div class="slider-title font-21 noto-bold">
                    დაფარვის ზონა
                </div>
            </a>
            <a href="#" class="swiper-slide">
                <div class="slider-num fira-bold font-89">
                    07
                </div>
                <div class="slider-title font-21 noto-bold">
                    დაფარვის ზონა
                </div>
            </a>
            <a href="#" class="swiper-slide">
                <div class="slider-num fira-bold font-89">
                    08
                </div>
                <div class="slider-title font-21 noto-bold">
                    სამოგზაურო დაზღვევა
                </div>
            </a>
            <a href="#" class="swiper-slide">
                <div class="slider-num fira-bold font-89">
                    09
                </div>
                <div class="slider-title font-21 noto-bold">
                    როგორ ავანაზღაურო
                </div>
            </a>
        </div>
    </div>
    </div>
</section>




@endsection
