@extends('app.layout.app')

@section('content')

<section class="head-banner policy-medi">
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
            <div class="tab-content-outer">
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
                <div class="flex-box column">
                    <div class="package-head flex-box column al-center">
                        <div class="two-lables">
                            <span class="lable popular flex-box al-center font-13 noto-bold white">პოპულარული
                            </span>
                            <div class="popular-star star-head">
                                <svg height="15px" viewBox="0 -10 511.99143 511" width="15px"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#fff"
                                        d="m510.652344 185.882812c-3.371094-10.367187-12.566406-17.707031-23.402344-18.6875l-147.796875-13.417968-58.410156-136.75c-4.3125-10.046875-14.125-16.53125-25.046875-16.53125s-20.738282 6.484375-25.023438 16.53125l-58.410156 136.75-147.820312 13.417968c-10.835938 1-20.011719 8.339844-23.402344 18.6875-3.371094 10.367188-.257813 21.738282 7.9375 28.925782l111.722656 97.964844-32.941406 145.085937c-2.410156 10.667969 1.730468 21.699219 10.582031 28.097656 4.757813 3.457031 10.347656 5.183594 15.957031 5.183594 4.820313 0 9.644532-1.28125 13.953125-3.859375l127.445313-76.203125 127.421875 76.203125c9.347656 5.585938 21.101562 5.074219 29.933593-1.324219 8.851563-6.398437 12.992188-17.429687 10.582032-28.097656l-32.941406-145.085937 111.722656-97.964844c8.191406-7.1875 11.308594-18.535156 7.9375-28.925782zm-252.203125 223.722657" />
                                </svg>
                            </div>
                            <span class="lable discount flex-box al-center font-13 noto-bold">-10%</span>
                        </div>
                        <h3 class="package-name fira-bold uppercase">მედი ბაზისური</h3>
                        <div class="area-box noto-regular font-21">120 კვ.მდე</div>
                    </div>
                    <div class="package-info">
                        <div class="package-price flex-box justify-center noto-bold">
                            11 <span class="currency">₾</span>
                            <div class="price-info noto-bold font-21">დან</div>

                            <div class="popular-star pad">
                                <svg height="15px" viewBox="0 -10 511.99143 511" width="15px"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#fff"
                                        d="m510.652344 185.882812c-3.371094-10.367187-12.566406-17.707031-23.402344-18.6875l-147.796875-13.417968-58.410156-136.75c-4.3125-10.046875-14.125-16.53125-25.046875-16.53125s-20.738282 6.484375-25.023438 16.53125l-58.410156 136.75-147.820312 13.417968c-10.835938 1-20.011719 8.339844-23.402344 18.6875-3.371094 10.367188-.257813 21.738282 7.9375 28.925782l111.722656 97.964844-32.941406 145.085937c-2.410156 10.667969 1.730468 21.699219 10.582031 28.097656 4.757813 3.457031 10.347656 5.183594 15.957031 5.183594 4.820313 0 9.644532-1.28125 13.953125-3.859375l127.445313-76.203125 127.421875 76.203125c9.347656 5.585938 21.101562 5.074219 29.933593-1.324219 8.851563-6.398437 12.992188-17.429687 10.582032-28.097656l-32.941406-145.085937 111.722656-97.964844c8.191406-7.1875 11.308594-18.535156 7.9375-28.925782zm-252.203125 223.722657" />
                                </svg>
                            </div>
                            <div class="discount-lable-pad  font-13 noto-bold">-10%</div>
                        </div>
                        <div class="package-text">
                            თუ შენი ქონება 200 კ.მ-ზე მეტია მაშინ გაეცანი პაკეტს
                            "ქონების დაზღვევა"
                        </div>
                    </div>
                </div>
                <div class="flex-box column al-center">
                    <div class="package-details">
                        <div class="details-2-box flex-box al-center justify-center">
                            <a href="#" class="compare-box">
                                <span class="resp-text noto-bold font-13">შედარება</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.949" height="24.949"
                                    viewBox="0 0 24.949 24.949">
                                    <path
                                        d="M28.449,3.5H10.421v6.921H3.5V28.449H21.528V21.528h6.921ZM19.73,26.679H5.271V12.219h5.151v9.309H19.73Zm6.948-6.948H21.528V10.421H12.219V5.271h14.46Z"
                                        transform="translate(-3.5 -3.5)" fill="#292562" fill-rule="evenodd" />
                                </svg>
                                <div class="details-tooltip noto-medium white flex-box al-center justify-center">
                                    შედარება
                                </div>
                            </a>
                            <span class="details-line"></span>
                            <a href="#" class="info-icon">
                                <span class="resp-text noto-bold font-13">ინფორმაცია</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29.104" height="29.104"
                                    viewBox="0 0 29.104 29.104">
                                    <path id="MenuClaims"
                                        d="M445,14.552A14.552,14.552,0,1,1,459.551,29.1,14.55,14.55,0,0,1,445,14.552Zm2.286,0A12.266,12.266,0,1,0,459.551,2.286,12.258,12.258,0,0,0,447.285,14.552Zm11.466,7.2a1.036,1.036,0,0,1-.343-.8,1.1,1.1,0,0,1,.343-.8,1.175,1.175,0,0,1,1.6,0,1.036,1.036,0,0,1,.343.8,1.1,1.1,0,0,1-.343.8,1.036,1.036,0,0,1-.8.343A1.268,1.268,0,0,1,458.752,21.751Zm-.343-4.761V8.152a1.143,1.143,0,1,1,2.285,0V16.99a1.143,1.143,0,0,1-2.285,0Z"
                                        transform="translate(-445)" fill="#292562" />
                                </svg>
                                <div class="details-tooltip noto-medium white flex-box al-center justify-center">
                                    დეტალურად
                                </div>
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
                <div class="flex-box column">
                    <div class="package-head flex-box column al-center">
                        <span class="lable popular flex-box al-center font-13 noto-bold white">პოპულარული</span>
                        <h3 class="package-name fira-bold uppercase">მედი ოპტიმალი</h3>
                        <div class="area-box noto-regular font-21">120 კვ.მდე</div>
                    </div>
                    <div class="package-info">
                        <div class="package-price flex-box justify-center noto-bold">
                            19 <span class="currency">₾</span>
                            <div class="price-info noto-bold font-21">დან</div>

                            <div class="popular-star">
                                <svg height="15px" viewBox="0 -10 511.99143 511" width="15px"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#fff"
                                        d="m510.652344 185.882812c-3.371094-10.367187-12.566406-17.707031-23.402344-18.6875l-147.796875-13.417968-58.410156-136.75c-4.3125-10.046875-14.125-16.53125-25.046875-16.53125s-20.738282 6.484375-25.023438 16.53125l-58.410156 136.75-147.820312 13.417968c-10.835938 1-20.011719 8.339844-23.402344 18.6875-3.371094 10.367188-.257813 21.738282 7.9375 28.925782l111.722656 97.964844-32.941406 145.085937c-2.410156 10.667969 1.730468 21.699219 10.582031 28.097656 4.757813 3.457031 10.347656 5.183594 15.957031 5.183594 4.820313 0 9.644532-1.28125 13.953125-3.859375l127.445313-76.203125 127.421875 76.203125c9.347656 5.585938 21.101562 5.074219 29.933593-1.324219 8.851563-6.398437 12.992188-17.429687 10.582032-28.097656l-32.941406-145.085937 111.722656-97.964844c8.191406-7.1875 11.308594-18.535156 7.9375-28.925782zm-252.203125 223.722657" />
                                </svg>
                            </div>
                        </div>
                        <div class="package-text">
                            თუ შენი ქონება 200 კ.მ-ზე მეტია მაშინ გაეცანი პაკეტს
                            "ქონების დაზღვევა"
                        </div>
                    </div>
                </div>
                <div class="flex-box column al-center">
                    <div class="package-details">
                        <div class="details-2-box flex-box al-center justify-center">
                            <a href="#" class="compare-box">
                                <span class="resp-text noto-bold font-13">შედარება</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.949" height="24.949"
                                    viewBox="0 0 24.949 24.949">
                                    <path
                                        d="M28.449,3.5H10.421v6.921H3.5V28.449H21.528V21.528h6.921ZM19.73,26.679H5.271V12.219h5.151v9.309H19.73Zm6.948-6.948H21.528V10.421H12.219V5.271h14.46Z"
                                        transform="translate(-3.5 -3.5)" fill="#292562" fill-rule="evenodd" />
                                </svg>
                                <div class="details-tooltip noto-medium white flex-box al-center justify-center">
                                    შედარება
                                </div>
                            </a>
                            <span class="details-line"></span>
                            <a href="#" class="info-icon">
                                <span class="resp-text noto-bold font-13">ინფორმაცია</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29.104" height="29.104"
                                    viewBox="0 0 29.104 29.104">
                                    <path id="MenuClaims"
                                        d="M445,14.552A14.552,14.552,0,1,1,459.551,29.1,14.55,14.55,0,0,1,445,14.552Zm2.286,0A12.266,12.266,0,1,0,459.551,2.286,12.258,12.258,0,0,0,447.285,14.552Zm11.466,7.2a1.036,1.036,0,0,1-.343-.8,1.1,1.1,0,0,1,.343-.8,1.175,1.175,0,0,1,1.6,0,1.036,1.036,0,0,1,.343.8,1.1,1.1,0,0,1-.343.8,1.036,1.036,0,0,1-.8.343A1.268,1.268,0,0,1,458.752,21.751Zm-.343-4.761V8.152a1.143,1.143,0,1,1,2.285,0V16.99a1.143,1.143,0,0,1-2.285,0Z"
                                        transform="translate(-445)" fill="#292562" />
                                </svg>
                                <div class="details-tooltip noto-medium white flex-box al-center justify-center">
                                    დეტალურად
                                </div>
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
                <div class="flex-box column">
                    <div class="package-head flex-box column al-center">
                        <span class="lable popular flex-box al-center font-13 noto-bold white">პოპულარული</span>
                        <h3 class="package-name fira-bold uppercase">მედი სტანდარტი</h3>
                        <div class="area-box noto-regular font-21">120 კვ.მდე</div>
                    </div>
                    <div class="package-info">
                        <div class="package-price flex-box justify-center noto-bold">
                            31 <span class="currency">₾</span>
                            <div class="price-info noto-bold font-21">დან</div>

                            <div class="popular-star">
                                <svg height="15px" viewBox="0 -10 511.99143 511" width="15px"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#fff"
                                        d="m510.652344 185.882812c-3.371094-10.367187-12.566406-17.707031-23.402344-18.6875l-147.796875-13.417968-58.410156-136.75c-4.3125-10.046875-14.125-16.53125-25.046875-16.53125s-20.738282 6.484375-25.023438 16.53125l-58.410156 136.75-147.820312 13.417968c-10.835938 1-20.011719 8.339844-23.402344 18.6875-3.371094 10.367188-.257813 21.738282 7.9375 28.925782l111.722656 97.964844-32.941406 145.085937c-2.410156 10.667969 1.730468 21.699219 10.582031 28.097656 4.757813 3.457031 10.347656 5.183594 15.957031 5.183594 4.820313 0 9.644532-1.28125 13.953125-3.859375l127.445313-76.203125 127.421875 76.203125c9.347656 5.585938 21.101562 5.074219 29.933593-1.324219 8.851563-6.398437 12.992188-17.429687 10.582032-28.097656l-32.941406-145.085937 111.722656-97.964844c8.191406-7.1875 11.308594-18.535156 7.9375-28.925782zm-252.203125 223.722657" />
                                </svg>
                            </div>
                        </div>
                        <div class="package-text">
                            თუ შენი ქონება 200 კ.მ-ზე მეტია მაშინ გაეცანი პაკეტს
                            "ქონების დაზღვევა"
                        </div>
                    </div>
                </div>
                <div class="flex-box column al-center">
                    <div class="package-details">
                        <div class="details-2-box flex-box al-center justify-center">
                            <a href="#" class="compare-box">
                                <span class="resp-text noto-bold font-13">შედარება</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.949" height="24.949"
                                    viewBox="0 0 24.949 24.949">
                                    <path
                                        d="M28.449,3.5H10.421v6.921H3.5V28.449H21.528V21.528h6.921ZM19.73,26.679H5.271V12.219h5.151v9.309H19.73Zm6.948-6.948H21.528V10.421H12.219V5.271h14.46Z"
                                        transform="translate(-3.5 -3.5)" fill="#292562" fill-rule="evenodd" />
                                </svg>
                                <div class="details-tooltip noto-medium white flex-box al-center justify-center">
                                    შედარება
                                </div>
                            </a>
                            <span class="details-line"></span>
                            <a href="#" class="info-icon">
                                <span class="resp-text noto-bold font-13">ინფორმაცია</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29.104" height="29.104"
                                    viewBox="0 0 29.104 29.104">
                                    <path id="MenuClaims"
                                        d="M445,14.552A14.552,14.552,0,1,1,459.551,29.1,14.55,14.55,0,0,1,445,14.552Zm2.286,0A12.266,12.266,0,1,0,459.551,2.286,12.258,12.258,0,0,0,447.285,14.552Zm11.466,7.2a1.036,1.036,0,0,1-.343-.8,1.1,1.1,0,0,1,.343-.8,1.175,1.175,0,0,1,1.6,0,1.036,1.036,0,0,1,.343.8,1.1,1.1,0,0,1-.343.8,1.036,1.036,0,0,1-.8.343A1.268,1.268,0,0,1,458.752,21.751Zm-.343-4.761V8.152a1.143,1.143,0,1,1,2.285,0V16.99a1.143,1.143,0,0,1-2.285,0Z"
                                        transform="translate(-445)" fill="#292562" />
                                </svg>
                                <div class="details-tooltip noto-medium white flex-box al-center justify-center">
                                    დეტალურად
                                </div>
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
                <div class="flex-box column">
                    <div class="package-head flex-box column al-center">
                        <span class="lable popular flex-box al-center font-13 noto-bold white">პოპულარული</span>
                        <h3 class="package-name fira-bold uppercase">მედი კლასიკი</h3>
                        <div class="area-box noto-regular font-21">120 კვ.მდე</div>
                    </div>
                    <div class="package-info">
                        <div class="package-price flex-box justify-center noto-bold">
                            41 <span class="currency">₾</span>
                            <div class="price-info noto-bold font-21">დან</div>

                            <div class="popular-star">
                                <svg height="15px" viewBox="0 -10 511.99143 511" width="15px"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#fff"
                                        d="m510.652344 185.882812c-3.371094-10.367187-12.566406-17.707031-23.402344-18.6875l-147.796875-13.417968-58.410156-136.75c-4.3125-10.046875-14.125-16.53125-25.046875-16.53125s-20.738282 6.484375-25.023438 16.53125l-58.410156 136.75-147.820312 13.417968c-10.835938 1-20.011719 8.339844-23.402344 18.6875-3.371094 10.367188-.257813 21.738282 7.9375 28.925782l111.722656 97.964844-32.941406 145.085937c-2.410156 10.667969 1.730468 21.699219 10.582031 28.097656 4.757813 3.457031 10.347656 5.183594 15.957031 5.183594 4.820313 0 9.644532-1.28125 13.953125-3.859375l127.445313-76.203125 127.421875 76.203125c9.347656 5.585938 21.101562 5.074219 29.933593-1.324219 8.851563-6.398437 12.992188-17.429687 10.582032-28.097656l-32.941406-145.085937 111.722656-97.964844c8.191406-7.1875 11.308594-18.535156 7.9375-28.925782zm-252.203125 223.722657" />
                                </svg>
                            </div>
                        </div>
                        <div class="package-text">
                            თუ შენი ქონება 200 კ.მ-ზე მეტია მაშინ გაეცანი პაკეტს
                            "ქონების დაზღვევა"
                        </div>
                    </div>
                </div>
                <div class="flex-box column al-center">
                    <div class="package-details">
                        <div class="details-2-box flex-box al-center justify-center">
                            <a href="#" class="compare-box">
                                <span class="resp-text noto-bold font-13">შედარება</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.949" height="24.949"
                                    viewBox="0 0 24.949 24.949">
                                    <path
                                        d="M28.449,3.5H10.421v6.921H3.5V28.449H21.528V21.528h6.921ZM19.73,26.679H5.271V12.219h5.151v9.309H19.73Zm6.948-6.948H21.528V10.421H12.219V5.271h14.46Z"
                                        transform="translate(-3.5 -3.5)" fill="#292562" fill-rule="evenodd" />
                                </svg>
                                <div class="details-tooltip noto-medium white flex-box al-center justify-center">
                                    შედარება
                                </div>
                            </a>
                            <span class="details-line"></span>
                            <a href="#" class="info-icon">
                                <span class="resp-text noto-bold font-13">ინფორმაცია</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29.104" height="29.104"
                                    viewBox="0 0 29.104 29.104">
                                    <path id="MenuClaims"
                                        d="M445,14.552A14.552,14.552,0,1,1,459.551,29.1,14.55,14.55,0,0,1,445,14.552Zm2.286,0A12.266,12.266,0,1,0,459.551,2.286,12.258,12.258,0,0,0,447.285,14.552Zm11.466,7.2a1.036,1.036,0,0,1-.343-.8,1.1,1.1,0,0,1,.343-.8,1.175,1.175,0,0,1,1.6,0,1.036,1.036,0,0,1,.343.8,1.1,1.1,0,0,1-.343.8,1.036,1.036,0,0,1-.8.343A1.268,1.268,0,0,1,458.752,21.751Zm-.343-4.761V8.152a1.143,1.143,0,1,1,2.285,0V16.99a1.143,1.143,0,0,1-2.285,0Z"
                                        transform="translate(-445)" fill="#292562" />
                                </svg>
                                <div class="details-tooltip noto-medium white flex-box al-center justify-center">
                                    დეტალურად
                                </div>
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
                <div class="flex-box column">
                    <div class="package-head flex-box column al-center">
                        <span class="lable discount flex-box al-center font-13 noto-bold">-10%</span>
                        <h3 class="package-name fira-bold uppercase">მედი პრემიუმი</h3>
                        <div class="area-box noto-regular font-21">120 კვ.მდე</div>
                    </div>
                    <div class="package-info">
                        <div class="package-price flex-box justify-center noto-bold">
                            56 <span class="currency">₾</span>
                            <div class="price-info noto-bold font-21">დან</div>

                            <div class="lable-mob discount font-13 noto-bold">
                                -10%
                            </div>
                        </div>
                        <div class="package-text">
                            თუ შენი ქონება 200 კ.მ-ზე მეტია მაშინ გაეცანი პაკეტს
                            "ქონების დაზღვევა"
                        </div>
                    </div>
                </div>
                <div class="flex-box column al-center">
                    <div class="package-details">
                        <div class="details-2-box flex-box al-center justify-center">
                            <a href="#" class="compare-box">
                                <span class="resp-text noto-bold font-13">შედარება</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.949" height="24.949"
                                    viewBox="0 0 24.949 24.949">
                                    <path
                                        d="M28.449,3.5H10.421v6.921H3.5V28.449H21.528V21.528h6.921ZM19.73,26.679H5.271V12.219h5.151v9.309H19.73Zm6.948-6.948H21.528V10.421H12.219V5.271h14.46Z"
                                        transform="translate(-3.5 -3.5)" fill="#292562" fill-rule="evenodd" />
                                </svg>
                                <div class="details-tooltip noto-medium white flex-box al-center justify-center">
                                    შედარება
                                </div>
                            </a>
                            <span class="details-line"></span>
                            <a href="#" class="info-icon">
                                <span class="resp-text noto-bold font-13">ინფორმაცია</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29.104" height="29.104"
                                    viewBox="0 0 29.104 29.104">
                                    <path id="MenuClaims"
                                        d="M445,14.552A14.552,14.552,0,1,1,459.551,29.1,14.55,14.55,0,0,1,445,14.552Zm2.286,0A12.266,12.266,0,1,0,459.551,2.286,12.258,12.258,0,0,0,447.285,14.552Zm11.466,7.2a1.036,1.036,0,0,1-.343-.8,1.1,1.1,0,0,1,.343-.8,1.175,1.175,0,0,1,1.6,0,1.036,1.036,0,0,1,.343.8,1.1,1.1,0,0,1-.343.8,1.036,1.036,0,0,1-.8.343A1.268,1.268,0,0,1,458.752,21.751Zm-.343-4.761V8.152a1.143,1.143,0,1,1,2.285,0V16.99a1.143,1.143,0,0,1-2.285,0Z"
                                        transform="translate(-445)" fill="#292562" />
                                </svg>
                                <div class="details-tooltip noto-medium white flex-box al-center justify-center">
                                    დეტალურად
                                </div>
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

        </div>

        <div class="details-btn btn">დეტალურად
            <svg xmlns="http://www.w3.org/2000/svg" width="12.815" height="7.215" viewBox="0 0 12.815 7.215">
                <g id="Group_2935" data-name="Group 2935" transform="translate(0.707 6.508) rotate(-90)">
                    <line id="Line_90" data-name="Line 90" y1="5.6" x2="5.649" transform="translate(0.152 5.801)"
                        fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1" />
                    <line id="Line_91" data-name="Line 91" x2="5.801" y2="5.801" fill="none" stroke="#fff"
                        stroke-linecap="round" stroke-width="1" />
                </g>
            </svg>
        </div>

        <div class="packagesBox">
            @include('app.layout.components.comparePackages')
        </div>
    </div>

</section>

@include('app.layout.components.directionSlider')
@include('app.layout.components.providerClinics')
@include('app.layout.components.serviceScheme')
@include('app.layout.components.findAgent')
@include('app.layout.components.packagesGrid')
@include('app.layout.components.realStories')
@include('app.layout.components.findAgent')
@include('app.layout.components.faqSlider')
@include('app.layout.components.ltlCommercial')

@endsection
