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


                    <img src="{{asset('cms/img/avatar-m.png')}}" class="profile-image rounded-circle"
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



                    @canany(['viewEvents'])
                        <li class="{{ Request::is('*/events*')   ? 'active'  : '' }}">
                            <a href="#" title="{{tr('events')}}" data-filter-tags="{{tr('events')}}">
                                <i class="fal fa-calendar-plus"></i>
                                <span class="nav-link-text" data-i18n="nav.application_intel">{{tr('events')}}</span>
                            </a>
                            <ul>

                                @can('viewEvents')
                                    <li class="{{ Request::is('*/events')   ? 'active'  : '' }}">
                                        <a href="{{route('CMS.events.list')}}" title="{{tr('events')}}"
                                           data-filter-tags="{{tr('events')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('events')}}</span>
                                        </a>
                                    </li>
                                @endcan


                            </ul>
                        </li>
                    @endcan


                    @canany(['viewProjects','viewProjectTags'])
                        <li class="{{ Request::is('*/projects*')   ? 'active'  : '' }}">
                            <a href="#" title="{{tr('projects')}}" data-filter-tags="{{tr('projects')}}">
                                <i class="fal fa-briefcase"></i>
                                <span class="nav-link-text" data-i18n="nav.application_intel">{{tr('projects')}}</span>
                            </a>
                            <ul>

                                @can('viewProjects')
                                    <li class="{{ Request::is('*/projects')   ? 'active'  : '' }}">
                                        <a href="{{route('CMS.projects.list')}}" title="{{tr('projects')}}"
                                           data-filter-tags="{{tr('projects')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('projects')}}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('viewProjectTags')
                                    <li class="{{ Request::is('*/projects/tags*')   ? 'active'  : '' }}">
                                        <a href="{{route('CMS.projects.tags.list')}}" title="{{tr('tags')}}"
                                           data-filter-tags="{{tr('tags')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('tags')}}</span>
                                        </a>
                                    </li>
                                @endcan


                            </ul>
                        </li>
                    @endcan


                    @canany(['viewAbout','viewHistoryTimeline'])
                        <li class="{{ Request::is('*/about*')   ? 'active'  : '' }}">
                            <a href="#" title="{{tr('about')}}" data-filter-tags="{{tr('about')}}">
                                <i class="fal fa-info"></i>
                                <span class="nav-link-text" data-i18n="nav.application_intel">{{tr('about')}}</span>
                            </a>
                            <ul>

                                @can('viewAbout')
                                    <li class="{{ Request::is('*/about/gcci*')   ? 'active'  : '' }}">
                                        <a href="{{route('CMS.About.gcci')}}" title="{{tr('about gcci')}}"
                                           data-filter-tags="{{tr('about gcci')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('about gcci')}}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('viewHistoryTimeline')
                                    <li class="{{ Request::is('*/about/history-timeline*')   ? 'active'  : '' }}">
                                        <a href="{{route('CMS.About.timeline')}}" title="{{tr('history timeline')}}"
                                           data-filter-tags="{{tr('history timeline')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('history timeline')}}</span>
                                        </a>
                                    </li>
                                @endcan


                            </ul>
                        </li>
                    @endcan

                    @canany(['viewPackages'])
                        <li class="{{ Request::is('*/membership*')   ? 'active'  : '' }}">
                            <a href="#" title="{{tr('memberhip')}}" data-filter-tags="{{tr('memberhip')}}">
                                <i class="fal fa-users"></i>
                                <span class="nav-link-text" data-i18n="nav.application_intel">{{tr('memberhip')}}</span>
                            </a>
                            <ul>

                                @can('viewPackages')
                                    <li class="{{ Request::is('*/membership/package*')   ? 'active'  : '' }}">
                                        <a href="{{route('CMS.membership.packages.index')}}" title="{{tr('packages')}}"
                                           data-filter-tags="{{tr('packages')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('packages')}}</span>
                                        </a>
                                    </li>
                                @endcan

                            </ul>
                        </li>
                    @endcan

                    @canany(['viewStaticHome', 'viewStaticTerms', 'viewStaticPolice'])
                        <li class="{{ Request::is('*/static*')   ? 'active'  : '' }}">
                            <a href="#" title="{{tr('static pages')}}" data-filter-tags="{{tr('static pages')}}">
                                <i class="fal fa-info"></i>
                                <span class="nav-link-text" data-i18n="nav.application_intel">{{tr('static pages')}}</span>
                            </a>
                            <ul>

                                @can('viewStaticHome')
                                    <li class="{{ Request::is('*/static/home*')   ? 'active'  : '' }}">
                                        <a href="{{route('CMS.static.home.edit', ['id' => 1 ])}}" title="{{tr('home')}}"
                                           data-filter-tags="{{tr('home')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('home')}}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('viewStaticTerms')
                                    <li class="{{ Request::is('*/static/terms&condition*')   ? 'active'  : '' }}">
                                        <a href="{{route('CMS.static.terms.edit', ['id' => 2 ])}}" title="{{tr('terms & condition')}}"
                                           data-filter-tags="{{tr('terms & condition')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('terms & condition')}}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('viewStaticPolice')
                                    <li class="{{ Request::is('*/static/privacy_police*')   ? 'active'  : '' }}">
                                        <a href="{{route('CMS.static.privacy_police.edit', ['id' => 3 ])}}" title="{{tr('privacy police')}}"
                                           data-filter-tags="{{tr('privacy police')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('privacy police')}}</span>
                                        </a>
                                    </li>
                                @endcan

                            </ul>
                        </li>
                    @endcan

                    @canany(['viewContact', 'viewUsefulLinks', 'viewPartners'])
                        <li class="{{ Request::is('*/useful_links*') || Request::is('*/partners*') || Request::is('*/contact*')   ? 'active'  : '' }}">
                            <a href="#" title="{{tr('Contact Block')}}" data-filter-tags="{{tr('Contact Block')}}">
                                <i class="fal fa-info"></i>
                                <span class="nav-link-text" data-i18n="nav.application_intel">{{tr('Contact Block')}}</span>
                            </a>
                            <ul>
                                <!-- Useful links menu -->
                                <!-- @param origin => 'general' -->
                                @can('viewUsefulLinks')
                                    <li class="{{ Request::is('*/useful_links/general*')   ? 'active'  : '' }}">
                                        <a href="{{route('CMS.contactBlock.usefulLink.index', ['origin' => 'general' ])}}" title="{{tr('General useful links')}}"
                                           data-filter-tags="{{tr('General useful links')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('General useful links')}}</span>
                                        </a>
                                    </li>
                                @endcan
                                <!-- @param origin => 'about' -->
                                @can('viewUsefulLinks')
                                    <li class="{{ Request::is('*/useful_links/about*')   ? 'active'  : '' }}">
                                        <a href="{{route('CMS.contactBlock.usefulLink.index', ['origin' => 'about' ])}}" title="{{tr('About useful links')}}"
                                           data-filter-tags="{{tr('About useful links')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('About useful links')}}</span>
                                        </a>
                                    </li>
                                @endcan
                                <!-- End of Useful links menu -->

                                <!-- Partners menu -->
                                <!-- @param origin => 'international' -->
                                @can('viewPartners')
                                    <li class="{{ Request::is('*/partners/international*')   ? 'active'  : '' }}">
                                        <a href="{{route('CMS.contactBlock.partner.index', ['origin' => 'international' ])}}" title="{{tr('International Cooperatives')}}"
                                           data-filter-tags="{{tr('International Cooperatives')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('International Cooperatives')}}</span>
                                        </a>
                                    </li>
                                @endcan
                                <!-- @param origin => 'home' -->
                                @can('viewPartners')
                                    <li class="{{ Request::is('*/partners/home*')   ? 'active'  : '' }}">
                                        <a href="{{route('CMS.contactBlock.partner.index', ['origin' => 'home' ])}}" title="{{tr('Home partners')}}"
                                           data-filter-tags="{{tr('Home partners')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('Home partners')}}</span>
                                        </a>
                                    </li>
                                @endcan
                                <!-- End of Partners menu -->

                                @can('viewContact')
                                    <li class="{{ Request::is('*/contact*')   ? 'active'  : '' }}">
                                        <a href="{{route('CMS.contactBlock.contact.index')}}" title="{{tr('Contact addresses')}}"
                                           data-filter-tags="{{tr('Contact addresses')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('Contact addresses')}}</span>
                                        </a>
                                    </li>
                                @endcan

                            </ul>
                        </li>
                    @endcan

                    @canany(['viewUsefulLinks', 'viewCategory'])
                        <li class="{{ Request::is('*/category*')   ? 'active'  : '' }}">
                            <a href="#" title="{{tr('categories')}}" data-filter-tags="{{tr('categories')}}">
                                <i class="fal fa-user"></i>
                                <span class="nav-link-text" data-i18n="nav.application_intel">{{tr('categories')}}</span>
                            </a>
                            <ul>

                                @can('viewUsefulLinks')
                                    <li class="{{ Request::is('*/category/useful_link')  ? 'active'  : '' }}">
                                        <a href="{{route('CMS.category.link.index')}}" title="{{tr('usefull link category')}}"
                                           data-filter-tags="{{tr('usefull link category')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('Usefull link category')}}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('viewCategories')
                                    <li class="{{ Request::is('*/category/business_type*')  ? 'active'  : '' }}">
                                        <a href="{{route('CMS.category.business.index')}}" title="{{tr('business type category')}}"
                                           data-filter-tags="{{tr('business type category')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('Business type category')}}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('viewCategories')
                                    <li class="{{ Request::is('*/category/team_type*')  ? 'active'  : '' }}">
                                        <a href="{{route('CMS.category.team.index')}}" title="{{tr('team type category')}}"
                                           data-filter-tags="{{tr('team type category')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('Team type category')}}</span>
                                        </a>
                                    </li>
                                @endcan

                            </ul>
                        </li>
                    @endcan

                    @canany(['viewUser','viewRoles'])
                        <li class="{{ Request::is('*/users*')   ? 'active'  : '' }}">
                            <a href="#" title="{{tr('users')}}" data-filter-tags="{{tr('users')}}">
                                <i class="fal fa-user"></i>
                                <span class="nav-link-text" data-i18n="nav.application_intel">{{tr('users')}}</span>
                            </a>
                            <ul>

                                @can('viewUser')
                                    <li class="{{ Request::is('*/users') | Request::is('*/users/create')   ? 'active'  : '' }}">
                                        <a href="{{route('CMS.user.list')}}" title="{{tr('user list')}}"
                                           data-filter-tags="{{tr('user list')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('user list')}}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('viewRoles')
                                    <li class="{{  \Route::current()->getName() == 'CMS.user.roles' ? 'active' : '' }}">
                                        <a href="{{route('CMS.user.roles')}}" title="{{tr('roles & permissions')}}"
                                           data-filter-tags="{{tr('roles & permissions')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_marketing_dashboard">{{tr('roles & permissions')}}</span>
                                        </a>
                                    </li>
                                @endcan

                            </ul>
                        </li>
                    @endcan




                    @canany(['viewCountry','viewCity','viewAddress'])
                        <li class="{{ Request::is('*/country*') | Request::is('*/city*') |Request::is('*/address*') ? 'active'  : '' }}">
                            <a href="#" title="{{tr('locations')}}" data-filter-tags="{{tr('locations')}}">
                                <i class="fal fa-location-arrow"></i>
                                <span class="nav-link-text" data-i18n="nav.application_intel">{{tr('locations')}}</span>
                            </a>
                            <ul>

                                @can('viewCountry')
                                    <li class="{{ Request::is('*/country*')  ? 'active'  : '' }}">
                                        <a href="{{route('CMS.country.list')}}" title="{{tr('countries')}}"
                                           data-filter-tags="{{tr('countries')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('countries')}}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('viewCity')
                                    <li class="{{  Request::is('*/city*')  ? 'active'  : '' }}">
                                        <a href="{{route('CMS.city.list')}}" title="{{tr('cities')}}"
                                           data-filter-tags="{{tr('cities')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_marketing_dashboard">{{tr('cities')}}</span>
                                        </a>
                                    </li>
                                @endcan


                                @can('viewAddress')
                                    <li class="{{ Request::is('*/address*') ? 'active'  : '' }}">
                                        <a href="{{route('CMS.address.list')}}" title="{{tr('addresses')}}"
                                           data-filter-tags="{{tr('addresses')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_marketing_dashboard">{{tr('addresses')}}</span>
                                        </a>
                                    </li>
                                @endcan

                            </ul>
                        </li>
                    @endcan





                    @canany(['viewLanguage','viewTranslation'])
                        <li class="{{ Request::is('*/languages*')  ? 'active'  : '' }}">
                            <a href="#" title="{{tr('languages')}}" data-filter-tags="{{tr('languages')}}">
                                <i class="fal fa-globe"></i>
                                <span class="nav-link-text" data-i18n="nav.application_intel">{{tr('languages')}}</span>
                            </a>
                            <ul>

                                @can('viewLanguage')
                                    <li {{ Request::is('*/languages') ? 'class=active' : '' }}>
                                        <a href="{{route('CMS.language.list')}}" title="{{tr('languages')}}"
                                           data-filter-tags="{{tr('languages')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_analytics_dashboard">{{tr('languages')}}</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('viewTranslation')
                                    <li {{ Request::is('*/translations*') ? 'class=active' : '' }}>
                                        <a href="{{route('CMS.translations.list')}}" title="{{tr('translations')}}"
                                           data-filter-tags="{{tr('translations')}}">
                                            <span class="nav-link-text"
                                                  data-i18n="nav.application_intel_marketing_dashboard">{{tr('translations')}}</span>
                                        </a>
                                    </li>
                                @endcan

                            </ul>
                        </li>
                    @endcanany



                    @can('viewSettings')
                        <li {{ Request::is('*/settings') ? 'class=active' : '' }}>
                            <a href="{{route('CMS.settings')}}" title="{{tr('settings')}}"
                               data-filter-tags="{{tr('settings')}}">
                                <i class="fal fa-cog"></i>
                                <span class="nav-link-text"
                                      data-i18n="nav.application_intel_analytics_dashboard">{{tr('settings')}}</span>
                            </a>
                        </li>
                    @endcan

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
                            <img src="{{asset('cms/img/avatar-m.png')}}" class="profile-image rounded-circle"
                                 alt="Dr. Codex Lantern">
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                            <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                                <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                            <span class="mr-2">
                                                <img src="{{asset('cms/img/avatar-m.png')}}"
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
