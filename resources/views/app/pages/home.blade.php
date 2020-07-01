@extends('app.layout.app')
@section('pageName')home @endsection
@section('content')
<form action="" id="test">
    <input type="text"  style="height: 0; outline: none; border: none;">
</form>
<div style="position: relative; width: 100%;">
    <div class="ribbon">
        <img src="{{asset('assets/img/01.png')}}" alt="">
        <img src="{{asset('assets/img/02.png')}}" alt="">
    </div>
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
                            <li class="tab noto-bold active" data-slide="1">ყიდვა</li>
                            <li class="tab noto-bold" data-slide="2">ანაზღაურება</li>
                            <li class="tab noto-bold" data-slide="3">გადახდა</li>
                        </ul>
                    </div>
                </div>
                <div class="slider-container">
                    <div class="sliders">
                        <div class="slider active" data-slide="1">
                            <div class="swiper-container buy-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-item="1" data-slider="1">
                                        <div class="img">
                                            <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        </div>
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="swiper-slide" data-item="2" data-slider="2">
                                        <div class="img">
                                            <img src="{{asset('assets/img/Group 588.png')}}" alt="">
                                        </div>
                                        <h2 class="font-16 noto-semibold">ავტო</h2>
                                    </div>
                                    <div class="swiper-slide" data-item="3" data-slider="3">
                                        <div class="img">
                                            <img src="{{asset('assets/img/Group 585.png')}}" alt="">
                                        </div>
                                        <h2 class="font-16 noto-semibold">მოგზაურობა</h2>
                                    </div>
                                    <div class="swiper-slide" data-item="4" data-slider="4">
                                        <div class="img">
                                            <img src="{{asset('assets/img/Group 587.png')}}" alt="">
                                        </div>
                                        <h2 class="font-16 noto-semibold">სახლი</h2>
                                    </div>
                                    <div class="swiper-slide" data-item="5" data-slider="5">
                                        <div class="img">
                                            <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        </div>
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
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
                        <div class="slider" data-slide="2">
                            <div class="swiper-container remuneration-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-item="1" data-slider="6">
                                        <div class="img">
                                            <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        </div>
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="swiper-slide" data-item="2" data-slider="7">
                                        <div class="img">
                                            <img src="{{asset('assets/img/Group 588.png')}}" alt="">
                                        </div>
                                        <h2 class="font-16 noto-semibold">ავტო</h2>
                                    </div>
                                    <div class="swiper-slide" data-item="3" data-slider="8">
                                        <div class="img">
                                            <img src="{{asset('assets/img/Group 585.png')}}" alt="">
                                        </div>
                                        <h2 class="font-16 noto-semibold">მოგზაურობა</h2>
                                    </div>
                                    <div class="swiper-slide" data-item="4" data-slider="9">
                                        <div class="img">
                                            <img src="{{asset('assets/img/Group 587.png')}}" alt="">
                                        </div>
                                        <h2 class="font-16 noto-semibold">სახლი</h2>
                                    </div>
                                    <div class="swiper-slide" data-item="5" data-slider="10">
                                        <div class="img">
                                            <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        </div>
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
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
                        <div class="slider" data-slide="3">
                            <div class="swiper-container pay-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-item="1" data-slider="11">
                                        <div class="img">
                                            <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        </div>
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="swiper-slide" data-item="2" data-slider="12">
                                        <div class="img">
                                            <img src="{{asset('assets/img/Group 588.png')}}" alt="">
                                        </div>
                                        <h2 class="font-16 noto-semibold">ავტო</h2>
                                    </div>
                                    <div class="swiper-slide" data-item="3" data-slider="13">
                                        <div class="img">
                                            <img src="{{asset('assets/img/Group 585.png')}}" alt="">
                                        </div>
                                        <h2 class="font-16 noto-semibold">მოგზაურობა</h2>
                                    </div>
                                    <div class="swiper-slide" data-item="4" data-slider="14">
                                        <div class="img">
                                            <img src="{{asset('assets/img/Group 587.png')}}" alt="">
                                        </div>
                                        <h2 class="font-16 noto-semibold">სახლი</h2>
                                    </div>
                                    <div class="swiper-slide" data-item="5" data-slider="15">
                                        <div class="img">
                                            <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        </div>
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
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
                    </div>
                    <div class="slider-components">
                        <div class="slide-component" data-component="1">
                            <div class="item">
                                <div class="side">
                                    <div class="image">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="stick"></div>
                                </div>
                                <div class="side">
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ექსკლუზივი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ფრენის გადადება</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.21" height="27.21" viewBox="0 0 27.21 27.21">
                                          <g id="Group_3164" data-name="Group 3164" transform="translate(23.674 3.536) rotate(90)">
                                            <line id="Line_15" data-name="Line 15" x2="20.139" y2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                            <line id="Line_16" data-name="Line 16" y1="20.139" x2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                          </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side">
                                    <div class="image">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="stick"></div>
                                </div>
                                <div class="side">
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ექსკლუზივი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">მრავალჯერადი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ფრენის გადადება</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.21" height="27.21" viewBox="0 0 27.21 27.21">
                                          <g id="Group_3164" data-name="Group 3164" transform="translate(23.674 3.536) rotate(90)">
                                            <line id="Line_15" data-name="Line 15" x2="20.139" y2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                            <line id="Line_16" data-name="Line 16" y1="20.139" x2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                          </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side">
                                    <div class="image">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="stick"></div>
                                </div>
                                <div class="side">
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ექსკლუზივი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">მრავალჯერადი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ფრენის გადადება</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.21" height="27.21" viewBox="0 0 27.21 27.21">
                                          <g id="Group_3164" data-name="Group 3164" transform="translate(23.674 3.536) rotate(90)">
                                            <line id="Line_15" data-name="Line 15" x2="20.139" y2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                            <line id="Line_16" data-name="Line 16" y1="20.139" x2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                          </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side">
                                    <div class="image">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="stick"></div>
                                </div>
                                <div class="side">
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ექსკლუზივი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">მრავალჯერადი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ფრენის გადადება</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.21" height="27.21" viewBox="0 0 27.21 27.21">
                                          <g id="Group_3164" data-name="Group 3164" transform="translate(23.674 3.536) rotate(90)">
                                            <line id="Line_15" data-name="Line 15" x2="20.139" y2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                            <line id="Line_16" data-name="Line 16" y1="20.139" x2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                          </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side">
                                    <div class="image">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="stick"></div>
                                </div>
                                <div class="side">
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ექსკლუზივი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">მრავალჯერადი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ფრენის გადადება</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.21" height="27.21" viewBox="0 0 27.21 27.21">
                                          <g id="Group_3164" data-name="Group 3164" transform="translate(23.674 3.536) rotate(90)">
                                            <line id="Line_15" data-name="Line 15" x2="20.139" y2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                            <line id="Line_16" data-name="Line 16" y1="20.139" x2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                          </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-component" data-component="2">
                            <div class="item">
                                <div class="side">
                                    <div class="image">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="stick"></div>
                                </div>
                                <div class="side">
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ექსკლუზივი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">მრავალჯერადი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ფრენის გადადება</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.21" height="27.21" viewBox="0 0 27.21 27.21">
                                          <g id="Group_3164" data-name="Group 3164" transform="translate(23.674 3.536) rotate(90)">
                                            <line id="Line_15" data-name="Line 15" x2="20.139" y2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                            <line id="Line_16" data-name="Line 16" y1="20.139" x2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                          </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side">
                                    <div class="image">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="stick"></div>
                                </div>
                                <div class="side">
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ექსკლუზივი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">მრავალჯერადი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ფრენის გადადება</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.21" height="27.21" viewBox="0 0 27.21 27.21">
                                          <g id="Group_3164" data-name="Group 3164" transform="translate(23.674 3.536) rotate(90)">
                                            <line id="Line_15" data-name="Line 15" x2="20.139" y2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                            <line id="Line_16" data-name="Line 16" y1="20.139" x2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                          </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side">
                                    <div class="image">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="stick"></div>
                                </div>
                                <div class="side">
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ექსკლუზივი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">მრავალჯერადი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ფრენის გადადება</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.21" height="27.21" viewBox="0 0 27.21 27.21">
                                          <g id="Group_3164" data-name="Group 3164" transform="translate(23.674 3.536) rotate(90)">
                                            <line id="Line_15" data-name="Line 15" x2="20.139" y2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                            <line id="Line_16" data-name="Line 16" y1="20.139" x2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                          </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side">
                                    <div class="image">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="stick"></div>
                                </div>
                                <div class="side">
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ექსკლუზივი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">მრავალჯერადი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ფრენის გადადება</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.21" height="27.21" viewBox="0 0 27.21 27.21">
                                          <g id="Group_3164" data-name="Group 3164" transform="translate(23.674 3.536) rotate(90)">
                                            <line id="Line_15" data-name="Line 15" x2="20.139" y2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                            <line id="Line_16" data-name="Line 16" y1="20.139" x2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                          </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side">
                                    <div class="image">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="stick"></div>
                                </div>
                                <div class="side">
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ექსკლუზივი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">მრავალჯერადი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ფრენის გადადება</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.21" height="27.21" viewBox="0 0 27.21 27.21">
                                          <g id="Group_3164" data-name="Group 3164" transform="translate(23.674 3.536) rotate(90)">
                                            <line id="Line_15" data-name="Line 15" x2="20.139" y2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                            <line id="Line_16" data-name="Line 16" y1="20.139" x2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                          </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-component" data-component="3">
                            <div class="item">
                                <div class="side">
                                    <div class="image">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="stick"></div>
                                </div>
                                <div class="side">
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ექსკლუზივი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">მრავალჯერადი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ფრენის გადადება</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.21" height="27.21" viewBox="0 0 27.21 27.21">
                                          <g id="Group_3164" data-name="Group 3164" transform="translate(23.674 3.536) rotate(90)">
                                            <line id="Line_15" data-name="Line 15" x2="20.139" y2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                            <line id="Line_16" data-name="Line 16" y1="20.139" x2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                          </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side">
                                    <div class="image">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="stick"></div>
                                </div>
                                <div class="side">
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ექსკლუზივი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">მრავალჯერადი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ფრენის გადადება</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.21" height="27.21" viewBox="0 0 27.21 27.21">
                                          <g id="Group_3164" data-name="Group 3164" transform="translate(23.674 3.536) rotate(90)">
                                            <line id="Line_15" data-name="Line 15" x2="20.139" y2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                            <line id="Line_16" data-name="Line 16" y1="20.139" x2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                          </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side">
                                    <div class="image">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="stick"></div>
                                </div>
                                <div class="side">
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ექსკლუზივი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">მრავალჯერადი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ფრენის გადადება</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.21" height="27.21" viewBox="0 0 27.21 27.21">
                                          <g id="Group_3164" data-name="Group 3164" transform="translate(23.674 3.536) rotate(90)">
                                            <line id="Line_15" data-name="Line 15" x2="20.139" y2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                            <line id="Line_16" data-name="Line 16" y1="20.139" x2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                          </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side">
                                    <div class="image">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="stick"></div>
                                </div>
                                <div class="side">
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ექსკლუზივი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">მრავალჯერადი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ფრენის გადადება</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.21" height="27.21" viewBox="0 0 27.21 27.21">
                                          <g id="Group_3164" data-name="Group 3164" transform="translate(23.674 3.536) rotate(90)">
                                            <line id="Line_15" data-name="Line 15" x2="20.139" y2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                            <line id="Line_16" data-name="Line 16" y1="20.139" x2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                          </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side">
                                    <div class="image">
                                        <img src="{{asset('assets/img/Group 589.png')}}" alt="">
                                        <h2 class="font-16 noto-semibold">ჯანმრთელობა</h2>
                                    </div>
                                    <div class="stick"></div>
                                </div>
                                <div class="side">
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ექსკლუზივი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">მრავალჯერადი</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="main">
                                            <span class="font-16 fira-bold">ფრენის გადადება</span>
                                        </div>
                                        <div class="hover">
                                            <div class="basket">
                                                <img src="{{asset('assets/img/shedzena.svg')}}" alt="">
                                                <div class="popup">
                                                    <span class="noto-medium font-10">შეიძინე ონლაინ</span>
                                                    <img src="{{asset('assets/img/Polygon 100.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="info">
                                                <img src="{{asset('assets/img/MenuClaimss.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.21" height="27.21" viewBox="0 0 27.21 27.21">
                                          <g id="Group_3164" data-name="Group 3164" transform="translate(23.674 3.536) rotate(90)">
                                            <line id="Line_15" data-name="Line 15" x2="20.139" y2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                            <line id="Line_16" data-name="Line 16" y1="20.139" x2="20.139" transform="translate(0 0)" fill="none" stroke="#ee2a7b" stroke-linecap="round" stroke-width="5"></line>
                                          </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-side">
            <div class="image-container">
                <picture>
                  <source media="(max-width:767px)" srcset="{{asset('assets/img/Skate+.png')}}">
                  <source media="(max-width:1365px)" srcset="{{asset('assets/img/Skate+.png')}}">
                  <img class="active" src="{{asset('assets/img/Skate+.png')}}" alt="">
                </picture>
                <img data-desktopsrc="{{asset('assets/img/Skate+.png')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/Skate+.png')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/Skate+.png')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/Skate+.png')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/Skate+.png')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/Skate+.png')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/Skate+.png')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/Skate+.png')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/Skate+.png')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/Skate+.png')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/Skate+.png')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/Skate+.png')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/Skate+.png')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/Skate+.png')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/Skate+.png')}}" alt="">
            </div>
        </div>
        <div class="slider--container">
            <div class="item">
                <picture>
                  <source media="(max-width:767px)" srcset="{{asset('assets/img/sport.jpg')}}">
                  <source media="(max-width:1365px)" srcset="{{asset('assets/img/sport.jpg')}}">
                  <img class="active" src="{{asset('assets/img/sport.jpg')}}" alt="">
                </picture>
                <img data-desktopsrc="{{asset('assets/img/sport.jpg')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/sport.jpg')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/sport.jpg')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/sport.jpg')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/sport.jpg')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/sport.jpg')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/sport.jpg')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/sport.jpg')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/sport.jpg')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/sport.jpg')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/sport.jpg')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/sport.jpg')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/sport.jpg')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/sport.jpg')}}" alt="">
                <img data-desktopsrc="{{asset('assets/img/sport.jpg')}}" alt="">
            </div>
        </div>
    </div>
    @include('app.layout.components.subMenu')
    @include('app.layout.components.ecoistSlider')
    @include('app.layout.components.becomeMember')
    @include('app.layout.components.newsOuter')
    @include('app.layout.components.faqSlider')
    <section class="social-banner">
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
</div>
@endsection