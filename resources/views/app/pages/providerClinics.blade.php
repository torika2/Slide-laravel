@extends('app.layout.app')
@section('pageName')business-risks-inner @endsection
@section('content')
    @include('app.layout.components.directionTabHead')

    <section class="directHeadContainer">
        <div class="directHeadInner">
            <h3 class="font-34 fira-bold">ინდივიდუალური კლიენტების პროვაიდერი კლინიკები</h3>
            <div class="providerClinicsSubTxt">2019 წლის -- რიცხვიდან საქართვლო კანონის ამადაამ მუხლის მიხედვით ყველ მძღოლი ვალდებულია დააზღვიოს ვტომობილი მტპლ-ზე. სავალდებული დაზღვევა
                <a href="" class="noto-bold">იხილე აქ</a>
                პოლისი ანაზღაურებს ზარალს, რომელიც თქვენი ბრალეულობით მიადგა სხვა ავტომობილს, სხვის ქონებას ან ჯანმრთელობას. ამავდროულად, ავტოსაგზაო შემთხვევის დროს, დაზღვეული შეძლებს ისარგებლოს ჯიპიაი ჰოლდინგის ავტოდაზღვევის ჯგუფის 24 საათიანი უფასო მომსახურებით
                <a href="##" class="noto-bold">გაიარეთ ავტორიზაცია</a></div>
            <div class="directInnerLinkFooter">
                <div class="btns">
                    <a href="##" class="noto-bold pinkBtn">
                        მედი
                    </a>
                    <a href="##" class="noto-bold whiteBtn">
                        ექსკლუზივი
                    </a>
                </div>

            </div>
            <div class="provClSubTtl noto-bold">კლინიკების ჩამონათვალი</div>
            <div class="provClLtlTtl noto-bold">რაიმე მოკლე განმატრება</div>
            <div class="busTabs">
                <a href="##" class="busTab noto-semibold active">ყველა კლინიკა</a>
                <a href="##" class="busTab noto-semibold">ოჯახის ექიმი</a>
                <a href="##" class="busTab noto-semibold">სტომატოლოგია</a>
                <a href="##" class="busTab noto-semibold">ამბულატორიული</a>
                <a href="##" class="busTab noto-semibold">სტაციონალური კლინიკები</a>
                <a href="##" class="busTab noto-semibold">პრივილეგირებული პროვაიდერი კლინიკები</a>
                <a href="##" class="busTab noto-semibold">პრივილეგირებული პროვაიდერი კლინიკები</a>
            </div>
            <div class="directInnerLinksContainer">

                <div class="directInnerLinkFooter">
                    <div class="providerClinicsListContainer">
                        <div class="providerClinicsList">
                            <div class="providerClinicsFrst">
                                <div class="providerLogo">
                                    <img src="{{asset('assets/img/providerLogo.png')}}" alt="">
                                </div>
                                <div class="name"><div class="dashedLine"></div>კურაციო</div>
                            </div>
                            <div class="providerClinicsScnd">
                                <div class="address"><div class="dashedLine"></div>თბილისი, ოთარ ლორთქიფანიძის #31თბილისი, ოთარ ლორთქიფანიძის #31თბილისი, ოთარ ლორთქიფანიძის #31</div>
                                <a href="tel:995322430101" class="mob"><div class="dashedLine"></div>995 32 243 01 01</a>
                            </div>
                            <a href="##" class="direction">
                                <div class="dashedLine"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="19.546" height="23.838" viewBox="0 0 19.546 23.838">
                                    <path id="Path_8939" data-name="Path 8939" d="M9.773,23.838C5.349,20.14,0,15.914,0,9.773a9.773,9.773,0,0,1,19.546,0C19.546,15.914,14.2,20.14,9.773,23.838Zm0-18.489A4.424,4.424,0,1,1,5.349,9.773,4.424,4.424,0,0,1,9.773,5.349Z" fill="#ee2a7b" fill-rule="evenodd"/>
                                </svg>
                                მიმართულება
                            </a>
                        </div>
                        <div class="providerClinicsList">
                            <div class="providerClinicsFrst">
                                <div class="providerLogo">
                                    <img src="{{asset('assets/img/providerLogo.png')}}" alt="">
                                </div>
                                <div class="name"><div class="dashedLine"></div>ერევანის ნარკოლოგიური კოლონია-კლინიკა</div>

                            </div>
                            <div class="providerClinicsScnd">
                                <div class="address"><div class="dashedLine"></div>თბილისი, ოთარ ლორთქიფანიძის #31</div>
                                <a href="tel:995322430101" class="mob"><div class="dashedLine"></div>995 32 243 01 01</a>
                            </div>
                            <a href="##" class="direction">
                                <div class="dashedLine"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="19.546" height="23.838" viewBox="0 0 19.546 23.838">
                                    <path id="Path_8939" data-name="Path 8939" d="M9.773,23.838C5.349,20.14,0,15.914,0,9.773a9.773,9.773,0,0,1,19.546,0C19.546,15.914,14.2,20.14,9.773,23.838Zm0-18.489A4.424,4.424,0,1,1,5.349,9.773,4.424,4.424,0,0,1,9.773,5.349Z" fill="#ee2a7b" fill-rule="evenodd"/>
                                </svg>
                                მიმართულება
                            </a>
                        </div>
                    </div>
                    @include('app.layout.components.pagination')
                    <div class="bot">
                        <div class="socs">
                            <div class="ttl">გაუზიარე მეგობარს:</div>
                            <a href="##">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31.997" height="31.004" viewBox="0 0 31.997 31.004">
                                    <path id="Subtraction_3" data-name="Subtraction 3" d="M30,31H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0H30a2,2,0,0,1,2,2V29A2,2,0,0,1,30,31ZM12.726,12.766a.712.712,0,0,0-.722.7v2.743a.691.691,0,0,0,.2.516.737.737,0,0,0,.522.216H13.95a.21.21,0,0,1,.213.206v7.491a.713.713,0,0,0,.723.7H17.7a.712.712,0,0,0,.722-.7V17.143a.21.21,0,0,1,.213-.206h2.044a.719.719,0,0,0,.714-.6l.473-2.743a.68.68,0,0,0-.155-.585.731.731,0,0,0-.556-.251h-2.4a.331.331,0,0,1-.336-.325v-1.75a.616.616,0,0,1,.186-.52.667.667,0,0,1,.46-.184.676.676,0,0,1,.076,0h2.134a.712.712,0,0,0,.722-.7V6.511a.712.712,0,0,0-.722-.7H18.742a4.766,4.766,0,0,0-3.505,1.183,4.025,4.025,0,0,0-1.069,2.977V12.56a.21.21,0,0,1-.212.206Z" transform="translate(-0.004 0.003)" fill="#292562"/>
                                </svg>
                            </a>
                            <a href="##">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31.5" height="31.5" viewBox="0 0 31.5 31.5">
                                    <path id="twitter-square-brands" d="M28.125,32H3.375A3.376,3.376,0,0,0,0,35.375v24.75A3.376,3.376,0,0,0,3.375,63.5h24.75A3.376,3.376,0,0,0,31.5,60.125V35.375A3.376,3.376,0,0,0,28.125,32ZM24.687,43.166c.014.2.014.4.014.6a13.031,13.031,0,0,1-13.12,13.12A13.06,13.06,0,0,1,4.5,54.816a9.716,9.716,0,0,0,1.111.056A9.246,9.246,0,0,0,11.334,52.9a4.618,4.618,0,0,1-4.31-3.2,4.97,4.97,0,0,0,2.081-.084,4.612,4.612,0,0,1-3.691-4.528v-.056A4.609,4.609,0,0,0,7.5,45.62,4.6,4.6,0,0,1,5.442,41.78a4.554,4.554,0,0,1,.626-2.327,13.094,13.094,0,0,0,9.506,4.823,4.621,4.621,0,0,1,7.868-4.212,9.037,9.037,0,0,0,2.925-1.111,4.6,4.6,0,0,1-2.025,2.538A9.177,9.177,0,0,0,27,40.775,9.706,9.706,0,0,1,24.687,43.166Z" transform="translate(0 -32)" fill="#292562"/>
                                </svg>
                            </a>
                            <a href="##">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31.5" height="31.5" viewBox="0 0 31.5 31.5">
                                    <path id="envelope-square-solid" d="M28.125,32H3.375A3.375,3.375,0,0,0,0,35.375v24.75A3.375,3.375,0,0,0,3.375,63.5h24.75A3.375,3.375,0,0,0,31.5,60.125V35.375A3.375,3.375,0,0,0,28.125,32Zm-15.6,16.179C6.147,43.551,6.212,43.54,4.5,42.207v-1.77A1.687,1.687,0,0,1,6.188,38.75H25.313A1.687,1.687,0,0,1,27,40.437v1.77c-1.714,1.334-1.648,1.345-8.024,5.972-.738.538-2.207,1.837-3.226,1.821C14.73,50.015,13.263,48.718,12.524,48.179ZM27,45.062v10a1.687,1.687,0,0,1-1.687,1.687H6.188A1.687,1.687,0,0,1,4.5,55.063v-10c.981.759,2.343,1.774,6.7,4.937,1,.727,2.67,2.26,4.549,2.251,1.89.009,3.589-1.55,4.551-2.252C24.657,46.837,26.019,45.821,27,45.062Z" transform="translate(0 -32)" fill="#292562"/>
                                </svg>
                            </a>
                        </div>
                        <a href="##" class="backBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48.914" height="10.829" viewBox="0 0 48.914 10.829">
                                <g id="Group_599" data-name="Group 599" transform="translate(1.414 1.414)">
                                    <g id="Group_108" data-name="Group 108">
                                        <line id="Line_14" data-name="Line 14" x1="46.5" transform="translate(0 4)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="2"/>
                                        <line id="Line_15" data-name="Line 15" x1="4" y2="4" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="2"/>
                                        <line id="Line_16" data-name="Line 16" x1="4" y1="4" transform="translate(0 4)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="2"/>
                                    </g>
                                </g>
                            </svg>
                            <span class="noto-bold">უკან დაბრუნება</span>
                        </a>
                    </div>

                </div>
            </div>

        </div>

    </section>

@endsection
