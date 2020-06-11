@extends('app.layout.app')

@section('content')

<section class="head-banner policy-medi">
    <div class="img-box">
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
            პოლისი მედი
        </h1>
        <a href="#" class="btn white banner-button">ონლაინ ანაზღაურება</a>
    </div>
</section>

<section class="container-secondary policy-packages">
    <div class="packages-outer">
        <div class="package-text-tabs">
            <h2 class="font-34 fira-bold">ჯანმრთელობის ინდივიდუალური დაზღვევა</h2>
            <div class="tabs flex-box">
                <div class="tab-link btn-white current" data-tab="textTab-1">პირადი ექიმი</div>
                <div class="tab-link btn-white" data-tab="textTab-2">პედიატრი</div>
                <div class="tab-link btn-white" data-tab="textTab-3">ვიზიტი სპეციალისტთან</div>
                <div class="tab-link btn-white" data-tab="textTab-4">გამოკვლევები</div>
            </div>
            <div>
                <div id="textTab-1" class="tab-content text current">
                    თუ შენთვის მნიშვნელოვანია პირადი ექიმის მიერ შენი ჯანმრთელობის მეთვალყურეობა, ერთ-ერთ საუკეთესო
                    კლინიკაში მომსახურებების მიღება და მაღალი პროცენტული დაფარვები, პაკეტი მედი მორგებულია შენზე.
                </div>
                <div id="textTab-2" class="tab-content text">
                    პირადი ექიმის მიერ შენი ჯანმრთელობის მეთვალყურეობა, ერთ-ერთ საუკეთესო
                    კლინიკაში მომსახურებების მიღება და მაღალი პროცენტული დაფარვები, პაკეტი მედი მორგებულია შენზე.
                    თუ შენთვის მნიშვნელოვანია პირადი ექიმის მიერ შენი ჯანმრთელობის მეთვალყურეობა, ერთ-ერთ საუკეთესო
                    კლინიკაში მომსახურებების მიღება და მაღალი პროცენტული დაფარვები, პაკეტი მედი მორგებულია შენზე.თუ
                    შენთვის მნიშვნელოვანია პირადი ექიმის მიერ შენი ჯანმრთელობის მეთვალყურეობა, ერთ-ერთ საუკეთესო
                    კლინიკაში მომსახურებების მიღება და მაღალი პროცენტული დაფარვები, პაკეტი მედი მორგებულია შენზე.
                </div>
                <div id="textTab-3" class="tab-content text">
                    პირადი ექიმის მიერ შენი ჯანმრთელობის მეთვალყურეობა, ერთ-ერთ საუკეთესო
                    კლინიკაში მომსახურებების მიღება და მაღალი პროცენტული დაფარვები, პაკეტი მედი მორგებულია შენზე. თუ
                    შენთვის მნიშვნელოვანია პირადი ექიმის მიერ შენი ჯანმრთელობის მეთვალყურეობა, ერთ-ერთ საუკეთესო
                    კლინიკაში მომსახურებების მიღება და მაღალი პროცენტული დაფარვები, პაკეტი მედი მორგებულია
                </div>
                <div id="textTab-4" class="tab-content text">
                    პაკეტი მედი მორგებულია შენზე.თუ ექიმის მიერ შენი ჯანმრთელობის მეთვალყურეობა, ერთ-ერთ საუკეთესო
                    კლინიკაში მომსახურებების მიღება და მაღალი პროცენტული დაფარვები, პაკეტი მედი მორგებულია შენზე.
                </div>
            </div>
        </div>
        <div class="packages flex-box justify-center">
            <div class="package-box flex-box column">
                <div class="lable popular flex-box al-center font-13 noto-bold white">პოპულარული
                    <div class="lable discount flex-box al-center font-13 noto-bold">-10%</div>
                </div>
                <div class="flex-box column al-center">
                    <div class="package-head">
                        <h3 class="package-name fira-bold uppercase">მედი</h3>
                    </div>
                </div>
                <div class="flex-box column al-center">

                    <div class="package-price noto-bold">
                        11 <span>₾</span>
                    </div>
                    <a href="#" class="btn">შეძენა</a>
                </div>
            </div>
            <div class="package-box flex-box column">
                <div class="flex-box column al-center">
                    <div class="package-head">
                        <h3 class="package-name fira-bold uppercase">ექსკლუზივი</h3>
                    </div>
                </div>
                <div class="flex-box column al-center">
                    <div class="package-price noto-bold">
                        19 <span>₾</span>
                    </div>
                    <a href="#" class="btn">შეძენა</a>
                </div>
            </div>
            <div class="package-box flex-box column">
                <div class="lable popular flex-box al-center font-13 noto-bold white">პოპულარული</div>
                <div class="package-head flex-box column al-center">
                    <h3 class="package-name fira-bold uppercase">მედი სტანდარტი</h3>
                    <div class="area-box noto-regular font-21">120 კვ.მდე</div>
                </div>
                <div class="flex-box column al-center">
                    <div class="package-info">
                        <div class="package-price noto-bold">
                            31 <span>₾</span>
                        </div>
                        <div class="package-text">
                            თუ შენი ქონება 200 კ.მ-ზე მეტია მაშინ გაეცანი პაკეტს
                            "ქონების დაზღვევა"
                        </div>
                    </div>
                    <div class="package-details">
                        <div class="details-2-box flex-box al-center justify-center">
                            <a href="#" class="compare-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.949" height="24.949"
                                    viewBox="0 0 24.949 24.949">
                                    <path id="Compare"
                                        d="M28.449,3.5H10.421v6.921H3.5V28.449H21.528V21.528h6.921ZM19.73,26.679H5.271V12.219h5.151v9.309H19.73Zm6.948-6.948H21.528V10.421H12.219V5.271h14.46Z"
                                        transform="translate(-3.5 -3.5)" fill="#ee2a7b" fill-rule="evenodd" />
                                </svg>
                                <div class="details-tooltip noto-medium white flex-box al-center justify-center">
                                    შედარება
                                </div>
                            </a>
                            <span class="details-line"></span>
                            <a href="#" class="info-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="29.104" height="29.104"
                                    viewBox="0 0 29.104 29.104">
                                    <path id="MenuClaims"
                                        d="M445,14.552A14.552,14.552,0,1,1,459.551,29.1,14.55,14.55,0,0,1,445,14.552Zm2.286,0A12.266,12.266,0,1,0,459.551,2.286,12.258,12.258,0,0,0,447.285,14.552Zm11.466,7.2a1.036,1.036,0,0,1-.343-.8,1.1,1.1,0,0,1,.343-.8,1.175,1.175,0,0,1,1.6,0,1.036,1.036,0,0,1,.343.8,1.1,1.1,0,0,1-.343.8,1.036,1.036,0,0,1-.8.343A1.268,1.268,0,0,1,458.752,21.751Zm-.343-4.761V8.152a1.143,1.143,0,1,1,2.285,0V16.99a1.143,1.143,0,0,1-2.285,0Z"
                                        transform="translate(-445)" fill="#292562" />
                                </svg>
                            </a>
                        </div>
                        <a href="#" class="details-1-box al-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29.104" height="29.104"
                                viewBox="0 0 29.104 29.104">
                                <path id="MenuClaims"
                                    d="M445,14.552A14.552,14.552,0,1,1,459.551,29.1,14.55,14.55,0,0,1,445,14.552Zm2.286,0A12.266,12.266,0,1,0,459.551,2.286,12.258,12.258,0,0,0,447.285,14.552Zm11.466,7.2a1.036,1.036,0,0,1-.343-.8,1.1,1.1,0,0,1,.343-.8,1.175,1.175,0,0,1,1.6,0,1.036,1.036,0,0,1,.343.8,1.1,1.1,0,0,1-.343.8,1.036,1.036,0,0,1-.8.343A1.268,1.268,0,0,1,458.752,21.751Zm-.343-4.761V8.152a1.143,1.143,0,1,1,2.285,0V16.99a1.143,1.143,0,0,1-2.285,0Z"
                                    transform="translate(-445)" fill="#292562" />
                            </svg>
                            <span class="noto-bold">დეტალურად</span>
                        </a>
                    </div>
                    <a href="#" class="btn">შეძენა</a>
                </div>
            </div>
            <div class="package-box flex-box column">
                <div class="flex-box column al-center">
                    <div class="package-head">
                        <h3 class="package-name fira-bold uppercase">ექსკლუზივი</h3>
                    </div>
                </div>
                <div class="flex-box column al-center">
                    <div class="package-price noto-bold">
                        41 <span>₾</span>
                    </div>
                    <a href="#" class="btn">შეძენა</a>
                </div>
            </div>
            <div class="package-box flex-box column">
                <div class="lable discount flex-box al-center font-13 noto-bold">-10%</div>
                <div class="flex-box column al-center">
                    <div class="package-head">
                        <h3 class="package-name fira-bold uppercase">ექსკლუზივი</h3>
                    </div>
                </div>
                <div class="flex-box column al-center">
                    <div class="package-price noto-bold">
                        56 <span>₾</span>
                    </div>
                    <a href="#" class="btn">შეძენა</a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
