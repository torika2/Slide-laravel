@extends('app.layout.app')

@section('content')

<section class="head-banner">
    <div class="img-box imgg">
        <picture>
            <source media="(max-width: 767px)" srcset="{{asset('assets/img/sport.jpg')}}">
            <source media="(max-width: 1023px)" srcset="{{asset('assets/img/sport.jpg')}}">
            <img src="{{asset('assets/img/sport.jpg')}}" class="img-absolute" alt="">
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
            ჯანმრთელობის <br> დაზღვევა
        </h1>
        <a href="#" class="btn white banner-button">ონლაინ ანაზღაურება</a>
    </div>
</section>
<section class="container-secondary">
    <div class="packages flex-box justify-center">
        <div class="package-box flex-box column">
            <div class="flex-box column al-center">
                <h3 class="fira-bold font-34">მედი</h3>
                <div class="package-circle"></div>
            </div>
            <div class="flex-box column al-center">
                <div class="package-description noto-medium text">
                    უნივერსალური ჯანმრთელობის დაზღვევა თქვენთვის და თქვენი ოჯახისთვის
                </div>
                <a href="#" class="btn">არჩევა</a>
            </div>
        </div>
        <div class="package-box flex-box column">
            <div class="flex-box column al-center">
                <h3 class="fira-bold font-34">ექსკლუზივი</h3>
                <div class="package-circle"></div>
            </div>
            <div class="flex-box column al-center">
                <div class="package-description noto-medium text">
                    დაზღვევა რომლითაც მოსმსახურებას ნებისმიერ კლინიკაში მიიღებთ
                </div>
                <a href="#" class="btn">არჩევა</a>
            </div>
        </div>
        <div class="package-box flex-box column">
            <div class="flex-box column al-center">
                <h3 class="fira-bold font-34">ონკოქეარი</h3>
                <div class="package-circle"></div>
            </div>
            <div class="flex-box column al-center">
                <div class="package-description noto-medium text">
                    პოლისი „ონკო ქეარი“ აზღვევს ავთვისებიანი სიმსივნური დაავადებების რისკს
                </div>
                <a href="#" class="btn">არჩევა</a>
            </div>
        </div>
        <div class="package-box flex-box column">
            <div class="flex-box column al-center">
                <h3 class="fira-bold font-34">პირველ რიგში</h3>
                <div class="package-circle"></div>
            </div>
            <div class="flex-box column al-center">
                <div class="package-description noto-medium text">
                    უნივერსალური ჯანმრთელობის დაზღვევა თქვენთვის და თქვენი ოჯახისთვის
                </div>
                <a href="#" class="btn">არჩევა</a>
            </div>
        </div>

    </div>
</section>


@include('app.layout.components.providerClinics')
@include('app.layout.components.serviceScheme')
@include('app.layout.components.counter')
@include('app.layout.components.findAgent')
@include('app.layout.components.faqSlider')

@endsection
