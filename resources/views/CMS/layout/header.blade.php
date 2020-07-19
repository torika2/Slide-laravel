<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="description" content="Page Titile">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" media="screen, print" href="{{asset('cms/css/vendors.bundle.css')}}">
    <link rel="stylesheet" media="screen, print" href="{{asset('cms/css/app.bundle.css')}}">
    <link rel="stylesheet" media="screen, print" href="{{asset('cms/css/datagrid/datatables/datatables.bundle.css')}}">
    <link rel="stylesheet" media="screen, print" href="{{asset('cms/css/flatpickr.min.css')}}">
    <link rel="stylesheet" media="screen, print" href="{{asset('cms/css/miscellaneous/lightgallery/lightgallery.bundle.css')}}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('cms/css/formplugins/select2/select2.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('cms/css/skin.min.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('cms/img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('cms/img/favicon/favicon-32x32.png')}}">
    <link rel="mask-icon" href="{{asset('cms/img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="csrf-token" content="{{csrf_token() }}">

    <link rel="stylesheet" media="screen, print" href="{{asset('/cms/css/notifications/sweetalert2/sweetalert2.bundle.css')}}">
    <style>
        .modal { overflow: auto !important; }
        .swal2-container {
            z-index: 10000000;
        }

    </style>
    <script src="{{ asset('cms/ckeditor/ckeditor.js') }}"></script>
    <!--<link rel="stylesheet" media="screen, print" href="css/your_styles.css">-->
    @yield('header')
</head>
<body class="mod-bg-1 ">

<script>
    'use strict';
    var classHolder = document.getElementsByTagName("BODY")[0],
        themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {},
        themeURL = themeSettings.themeURL || '',
        themeOptions = themeSettings.themeOptions || '';
    if (themeSettings.themeOptions) {
        classHolder.className = themeSettings.themeOptions;
        console.log("%c✔ Theme settings loaded", "color: #148f32");
    } else {
        console.log("Heads up! Theme settings is empty or does not exist, loading default settings...");
    }
    if (themeSettings.themeURL && !document.getElementById('mytheme')) {
        var cssfile = document.createElement('link');
        cssfile.id = 'mytheme';
        cssfile.rel = 'stylesheet';
        cssfile.href = themeURL;
        document.getElementsByTagName('head')[0].appendChild(cssfile);
    }
    var saveSettings = function () {
        themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function (item) {
            return /^(nav|header|mod|display)-/i.test(item);
        }).join(' ');
        if (document.getElementById('mytheme')) {
            themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
        }
        ;
        localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
    }
    var resetSettings = function () {
        localStorage.setItem("themeSettings", "");
    }
</script>
<!-- BEGIN Page Wrapper -->


<div class="page-wrapper">
    <div class="page-inner">
        <!-- BEGIN Left Aside -->
        <aside class="page-sidebar">
            <div class="page-logo">
                <a href="" class="page-logo-link press-scale-down d-flex align-items-center position-relative">
                    <img src="{{asset('cms/img/connect-cms.svg')}}" alt="SmartAdmin WebApp"
                         style="width: 70%!important;" aria-roledescription="logo">
                </a>
            </div>
            <!-- BEGIN PRIMARY NAVIGATION -->
            <nav id="js-primary-nav" class="primary-nav" role="navigation">
                <div class="nav-filter">
                    <div class="position-relative">
                        <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control"
                               tabindex="0">
                        <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off"
                           data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                            <i class="fal fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="info-card">


                    <img src="@if (Auth::user()->avatar){{asset('files/img/'.Auth::user()->avatar)}}@else{{asset('cms/img/avatar-m.png')}}@endif" class="profile-image rounded-circle"
                         alt="Dr. Codex Lantern">
                    <div class="info-card-text">
                        <a href="#" class="d-flex align-items-center text-white">
                            <div class="info-card-text">
                                <div class="fs-lg text-truncate text-truncate-lg">{{Auth::user()->fullname}}</div>
                                <span
                                    class="text-truncate text-truncate-md opacity-80">{{Auth::user()->username}}</span>
                            </div>

                        </a>

                    </div>
                    <img src="{{asset('cms/img/card-backgrounds/cover-2-lg.png')}}" class="cover" alt="cover">
                    <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle"
                       data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                        <i class="fal fa-angle-down"></i>
                    </a>
                </div>

                {{--menu start--}}
                <ul id="js-nav-menu" class="nav-menu">
                    <li class="{{ \Route::current()->getName() == 'CMS.Dashboard' ? 'active' : '' }}">
                        <a href="{{route('CMS.Dashboard')}}" title="{{tr('dashboard')}}"
                           data-filter-tags="{{tr('dashboard')}}" class="active waves-effect waves-themed">
                            <i class="fal fa-home"></i>
                            <span class="nav-link-text" data-i18n="nav.ui_components">{{tr('dashboard')}}</span>
                        </a>
                    </li>

                    <?php $modules = Config::get('cmsModules'); ?>

                    @foreach($modules as $module)

                    <?php $module = (object) $module; ?>

                    @canany($module->gates)
                        <li class="{{ in_array(\Route::current()->getName(), $module->namespaces) ? 'active' : '' }}">
                            <?php
                                if(!empty($module->params) && $module->routeName){
                                    $parentLink = route($module->routeName, $module->params);
                                }
                                else if($module->routeName){
                                    $parentLink = route($module->routeName);
                                }
                                else {
                                    $parentLink = '#';
                                }
                            ?>
                            <a href="{{$parentLink}}" title="{{tr($module->label)}}" data-filter-tags="{{tr($module->label)}}">
                                <i class="{{$module->icon}}"></i>
                                <span class="nav-link-text" data-i18n="nav.application_intel">{{ ucfirst(tr($module->label)) }}</span>
                            </a>
                            @if($module->hasChildren && !empty($module->children))
                            <ul>
                                @foreach($module->children as $child)
                                <?php $child = (object) $child; ?>
                                    @can($child->gate)
                                        <?php
                                            if(!empty($child->params) && $child->routeName){
                                                $link = route($child->routeName, $child->params);
                                            }
                                            else if($child->routeName){
                                                $link = route($child->routeName);
                                            }
                                            else {
                                                $link = '#';
                                            }
                                        ?>
                                        <li class="{{ Request::is('*/'.$child->namespace)  ? 'active'  : '' }}">
                                            <a href="{{$link}}" title="{{tr($child->label)}}"
                                            data-filter-tags="{{tr($child->label)}}">
                                                <span class="nav-link-text"
                                                    data-i18n="nav.application_intel_analytics_dashboard">{{ucfirst(tr($child->label))}}</span>
                                            </a>
                                        </li>
                                    @endcan
                                @endforeach
                               
                            </ul>
                            @endif

                        </li>
                        @endcan
                    @endforeach
                </ul>

                {{--menu end--}}

                <div class="filter-message js-filter-message bg-success-600"></div>
            </nav>
            <!-- END PRIMARY NAVIGATION -->
            <!-- NAV FOOTER -->
            <div class="nav-footer shadow-top">
                <a href="#" onclick="return false;" data-action="toggle" data-class="nav-function-minify"
                   class="hidden-md-down">
                    <i class="ni ni-chevron-right"></i>
                    <i class="ni ni-chevron-right"></i>
                </a>

            </div> <!-- END NAV FOOTER -->
        </aside>
        <!-- END Left Aside -->
        <div class="page-content-wrapper">


            <!-- BEGIN Page Header -->
            <header class="page-header" role="banner">
                <!-- we need this logo when user switches to nav-function-top -->
                <div class="page-logo">
                    <a href="{{route('CMS.Dashboard')}}"
                       class="page-logo-link press-scale-down d-flex align-items-center position-relative">
                        <img src="{{asset('cms/img/connect-cms.svg')}}" alt="SmartAdmin WebApp"
                             aria-roledescription="logo">
                        <span class="page-logo-text mr-1">Connect CMS</span>
                        <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                        <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                    </a>
                </div>
                <!-- DOC: nav menu layout change shortcut -->
                <div class="hidden-md-down dropdown-icon-menu position-relative">
                    <a href="#" class="header-btn btn js-waves-off" data-action="toggle"
                       data-class="nav-function-hidden" title="Hide Navigation">
                        <i class="ni ni-menu"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify"
                               title="Minify Navigation">
                                <i class="ni ni-minify-nav"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed"
                               title="Lock Navigation">
                                <i class="ni ni-lock-nav"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- DOC: mobile button appears during mobile width -->
                <div class="hidden-lg-up">
                    <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                        <i class="ni ni-menu"></i>
                    </a>
                </div>

                <div class="ml-auto d-flex">
                    <!-- activate app search icon (mobile) -->

                    <!-- app settings -->
                    <div class="hidden-md-down">
                        <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
                            <i class="fal fa-cog"></i>
                        </a>
                    </div>


                    <div>
                        <a href="#" data-toggle="dropdown" title="{{auth::user()->email}}"
                           class="header-icon d-flex align-items-center justify-content-center ml-2">
                            <img src="@if (Auth::user()->avatar){{asset('files/img/'.Auth::user()->avatar)}}@else{{asset('cms/img/avatar-m.png')}}@endif" class="profile-image rounded-circle"
                                 alt="Dr. Codex Lantern">
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                            <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                                <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                            <span class="mr-2">
                                                <img src="@if (Auth::user()->avatar){{asset('files/img/'.Auth::user()->avatar)}}@else{{asset('cms/img/avatar-m.png')}}@endif"
                                                     class="rounded-circle profile-image" alt="Dr. Codex Lantern">
                                            </span>
                                    <div class="info-card-text">
                                        <div
                                            class="fs-lg text-truncate text-truncate-lg">{{Auth::user()->fullname}}</div>
                                        <span
                                            class="text-truncate text-truncate-md opacity-80">{{Auth::user()->email}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider m-1"></div>
                            <a class="dropdown-item" href="{{route('CMS.user.profile')}}">{{tr('profile')}}</a>
                            <a href="#" class="dropdown-item" data-toggle="modal" data-target=".js-modal-settings">
                                <span data-i18n="drpdwn.settings">{{tr('settings')}}</span>
                            </a>
                            <div class="dropdown-divider m-0"></div>


                            <div class="dropdown-multilevel dropdown-multilevel-left">
                                <div class="dropdown-item">
                                    {{tr('language')}}
                                </div>
                                <div class="dropdown-menu">
                                    @foreach(getLocales(true) as $loc)
                                        <a href="{{route('CMS.language.setlocale',$loc->locale)}}"
                                           class="dropdown-item @if(app()->getlocale() == $loc->locale) active @endif">{{$loc->name}}</a>

                                    @endforeach
                                </div>
                            </div>
                            <div class="dropdown-divider m-0"></div>
                            <a class="dropdown-item fw-500 pt-3 pb-3" href="{{route('auth.logout')}}">
                                <span data-i18n="drpdwn.page-logout">Logout</span>

                            </a>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END Page Header -->
