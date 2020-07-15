<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('login', [
    'uses' => 'Admin\AuthController@login',
    'as' => 'auth.login']);

Route::post('post-login', [
    'uses' => 'Admin\AuthController@postLogin',
    'as' => 'auth.postLogin']);

Route::get('logout', [
    'uses' => 'Admin\AuthController@logout',
    'as' => 'auth.logout']);


Route::group(['prefix' => 'connect', 'middleware' => ['auth', 'backend']], function () {

    Route::get('/', [
        'uses' => 'Admin\DashboardController@index',
        'as' => 'CMS.Dashboard']);


    Route::group(['prefix' => 'logs', 'as' => 'log.'], function () {

        Route::get('/', [
            'uses' => 'Admin\Logs\LogsController@logs',
            'as' => 'list']);


        Route::post('/view', [
            'uses' => 'Admin\Logs\LogsController@view',
            'as' => 'view'
        ]);


    });





    Route::group(['prefix' => 'users'], function () {

        Route::get('/', [
            'uses' => 'Admin\User\UserController@index',
            'as' => 'CMS.user.list']);


        Route::get('/create', [
            'uses' => 'Admin\User\UserController@add',
            'as' => 'CMS.user.add']);

        Route::post('/create', [
            'uses' => 'Admin\User\UserController@create',
            'as' => 'CMS.user.create']);


        Route::get('/edit/{username}', [
            'uses' => 'Admin\User\UserController@edit',
            'as' => 'CMS.user.edit']);

        Route::post('/update', [
            'uses' => 'Admin\User\UserController@update',
            'as' => 'CMS.user.update']);

        Route::post('/delete', [
            'uses' => 'Admin\User\UserController@delete',
            'as' => 'CMS.user.delete']);


        Route::group(['prefix' => 'roles'], function () {

            Route::get('/', [
                'uses' => 'Admin\User\RolesController@index',
                'as' => 'CMS.user.roles']);

            Route::post('/getRole', [
                'uses' => 'Admin\User\RolesController@getRole',
                'as' => 'CMS.user.role.get']);

            Route::post('/getRoleWithPermission', [
                'uses' => 'Admin\User\RolesController@getRoleWithPermission',
                'as' => 'CMS.user.roles.with.permission']);

            Route::post('/changepermissions', [
                'uses' => 'Admin\User\RolesController@changepermissions',
                'as' => 'CMS.user.roles.change.permissions']);

            Route::post('/createRole', [
                'uses' => 'Admin\User\RolesController@createRole',
                'as' => 'CMS.user.role.create']);

            Route::post('/createPermission', [
                'uses' => 'Admin\User\RolesController@createPermission',
                'as' => 'CMS.user.permission.create']);

            Route::post('/updateRole', [
                'uses' => 'Admin\User\RolesController@updateRole',
                'as' => 'CMS.user.role.update']);

            Route::post('/deleteRole', [
                'uses' => 'Admin\User\RolesController@deleteRole',
                'as' => 'CMS.user.role.delete']);

            Route::post('/getUserRole', [
                'uses' => 'Admin\User\RolesController@getUserRole',
                'as' => 'CMS.user.roles.getuser.roles']);

            Route::post('/assignroletouser', [
                'uses' => 'Admin\User\RolesController@assignRoleToUser',
                'as' => 'CMS.user.assigne.role.user']);
        });
    });

    Route::group(['prefix' => 'languages'], function () {


        Route::group(['prefix' => '/'], function () {

            Route::get('/', [
                'uses' => 'Admin\Languages\LanguagesController@index',
                'as' => 'CMS.language.list']);

            Route::post('/updateStatus', [
                'uses' => 'Admin\Languages\LanguagesController@updateStatus',
                'as' => 'CMS.language.update.status']);

            Route::post('/makeDefault', [
                'uses' => 'Admin\Languages\LanguagesController@default',
                'as' => 'CMS.language.update.default']);

            Route::post('/create', [
                'uses' => 'Admin\Languages\LanguagesController@create',
                'as' => 'CMS.language.create']);

            Route::post('/language', [
                'uses' => 'Admin\Languages\LanguagesController@language',
                'as' => 'CMS.language.language']);

            Route::post('/update', [
                'uses' => 'Admin\Languages\LanguagesController@update',
                'as' => 'CMS.language.update']);

            Route::post('/delete', [
                'uses' => 'Admin\Languages\LanguagesController@delete',
                'as' => 'CMS.language.delete']);

            Route::get('/set/{locale}', [
                'uses' => 'Admin\Languages\LanguagesController@setLocale',
                'as' => 'CMS.language.setlocale']);
        });

        Route::group(['prefix' => 'translations'], function () {

            Route::get('/', [
                'uses' => 'Admin\Languages\Translations\TranslationsController@index',
                'as' => 'CMS.translations.list']);

            Route::post('/create', [
                'uses' => 'Admin\Languages\Translations\TranslationsController@create',
                'as' => 'CMS.translations.create']);

            Route::post('/delete', [
                'uses' => 'Admin\Languages\Translations\TranslationsController@delete',
                'as' => 'CMS.translations.delete']);

            Route::post('/getalltranslations', [
                'uses' => 'Admin\Languages\Translations\TranslationsController@getAllTranslation',
                'as' => 'CMS.translations.get.all.translated']);

            Route::post('/update', [
                'uses' => 'Admin\Languages\Translations\TranslationsController@update',
                'as' => 'CMS.translations.update']);
        });
    });

    Route::group(['prefix' => 'profile'], function () {

        Route::get('/', [
            'uses' => 'Admin\User\UserController@profile',
            'as' => 'CMS.user.profile']);

        Route::post('/update', [
            'uses' => 'Admin\User\UserController@updateProfile',
            'as' => 'CMS.user.profile.update']);
    });

    Route::group(['prefix' => 'settings'], function () {

        Route::get('/', [
            'uses' => 'Admin\Settings\SettingsController@index',
            'as' => 'CMS.settings']);


        Route::post('/store', [
            'uses' => 'Admin\Settings\SettingsController@store',
            'as' => 'CMS.settings.store']);
    });

    Route::group(['prefix' => 'seo'], function () {

        Route::get('/', [
            'uses' => 'Admin\Seo\SeoController@index',
            'as' => 'CMS.seo.index']);


        Route::get('/edit/{id}', [
            'uses' => 'Admin\Seo\SeoController@edit',
            'as' => 'CMS.seo.edit']);

        Route::post('/update/{id}', [
            'uses' => 'Admin\Seo\SeoController@update',
            'as' => 'CMS.seo.update']);


    });


    Route::group(['prefix' => 'static'], function () {

        Route::post('/', [
            'uses' => 'Admin\StaticData\StaticDataController@update',
            'as' => 'CMS.static.update']);

    });


    Route::group(['prefix' => 'subscriptions'], function () {

        Route::get('/', [
            'uses' => 'Admin\Subscriptions\SubscriptionController@index',
            'as' => 'CMS.subscriptions.list']);

        Route::get('/export', [
            'uses' => 'Admin\Subscriptions\SubscriptionController@export',
            'as' => 'CMS.subscriptions.export']);
    });



    Route::group(['prefix' => 'use-cases'], function () {


        Route::get('/', [
            'uses' => 'Admin\UseCase\UseCaseController@index',
            'as' => 'CMS.usecase.list']);

        Route::get('/create', [
            'uses' => 'Admin\UseCase\UseCaseController@create',
            'as' => 'CMS.usecase.create']);

        Route::get('/update/{id}', [
            'uses' => 'Admin\UseCase\UseCaseController@update',
            'as' => 'CMS.usecase.update']);

        Route::post('/store', [
            'uses' => 'Admin\UseCase\UseCaseController@store',
            'as' => 'CMS.usecase.store']);

        Route::post('/reOrder', [
            'uses' => 'Admin\UseCase\UseCaseController@reOrder',
            'as' => 'CMS.usecase.reOrder']);

        Route::post('/delete', [
            'uses' => 'Admin\UseCase\UseCaseController@delete',
            'as' => 'CMS.usecase.delete']);

        Route::group(['prefix' => 'industry'], function () {


            Route::get('/', [
                'uses' => 'Admin\UseCase\IndustryController@index',
                'as' => 'CMS.usecase.industry.list']);

            Route::get('/create', [
                'uses' => 'Admin\UseCase\IndustryController@create',
                'as' => 'CMS.usecase.industry.create']);

            Route::get('/update/{id}', [
                'uses' => 'Admin\UseCase\IndustryController@update',
                'as' => 'CMS.usecase.industry.update']);

            Route::post('/store', [
                'uses' => 'Admin\UseCase\IndustryController@store',
                'as' => 'CMS.usecase.industry.store']);

            Route::post('/reOrder', [
                'uses' => 'Admin\UseCase\IndustryController@reOrder',
                'as' => 'CMS.usecase.industry.reOrder']);

            Route::post('/delete', [
                'uses' => 'Admin\UseCase\IndustryController@delete',
                'as' => 'CMS.usecase.industry.delete']);

        });


        Route::group(['prefix' => 'container'], function () {


            Route::get('/', [
                'uses' => 'Admin\UseCase\ContainerController@index',
                'as' => 'CMS.usecase.container.list']);

            Route::get('/create', [
                'uses' => 'Admin\UseCase\ContainerController@create',
                'as' => 'CMS.usecase.container.create']);

            Route::get('/update/{id}', [
                'uses' => 'Admin\UseCase\ContainerController@update',
                'as' => 'CMS.usecase.container.update']);

            Route::post('/store', [
                'uses' => 'Admin\UseCase\ContainerController@store',
                'as' => 'CMS.usecase.container.store']);

            Route::post('/reOrder', [
                'uses' => 'Admin\UseCase\ContainerController@reOrder',
                'as' => 'CMS.usecase.container.reOrder']);

            Route::post('/delete', [
                'uses' => 'Admin\UseCase\ContainerController@delete',
                'as' => 'CMS.usecase.container.delete']);

        });



    });



    Route::group(['prefix' => 'product'], function () {

        Route::get('/', [
            'uses' => 'Admin\Product\ProductController@index',
            'as' => 'CMS.product.list']);

        Route::get('/create', [
            'uses' => 'Admin\Product\ProductController@create',
            'as' => 'CMS.product.create']);

        Route::get('/update/{id}', [
            'uses' => 'Admin\Product\ProductController@update',
            'as' => 'CMS.product.update']);

        Route::post('/store', [
            'uses' => 'Admin\Product\ProductController@store',
            'as' => 'CMS.product.store']);

        Route::post('/reOrder', [
            'uses' => 'Admin\Product\ProductController@reOrder',
            'as' => 'CMS.product.reOrder']);

        Route::post('/delete', [
            'uses' => 'Admin\Product\ProductController@delete',
            'as' => 'CMS.product.delete']);




        Route::post('/links/get', [
            'uses' => 'Admin\Product\ProductController@linkGet',
            'as' => 'CMS.product.link.get']);


        Route::get('/links/{id}', [
            'uses' => 'Admin\Product\ProductController@links',
            'as' => 'CMS.product.link.list']);

        Route::post('/links/{id}/store', [
            'uses' => 'Admin\Product\ProductController@linksStore',
            'as' => 'CMS.product.link.store']);

        Route::post('/reOrderLink', [
            'uses' => 'Admin\Product\ProductController@reOrderLink',
            'as' => 'CMS.product.link.reOrder']);

        Route::post('/deleteLink', [
            'uses' => 'Admin\Product\ProductController@deleteLink',
            'as' => 'CMS.product.link.delete']);


        Route::group(['prefix' => 'details'], function () {



            Route::get('/', [
                'uses' => 'Admin\Product\DetailsController@index',
                'as' => 'CMS.product.details.list']);

            Route::get('/create', [
                'uses' => 'Admin\Product\DetailsController@create',
                'as' => 'CMS.product.details.create']);

            Route::get('/update/{id}', [
                'uses' => 'Admin\Product\DetailsController@update',
                'as' => 'CMS.product.details.update']);

            Route::post('/store', [
                'uses' => 'Admin\Product\DetailsController@store',
                'as' => 'CMS.product.details.store']);

            Route::post('/reOrder', [
                'uses' => 'Admin\Product\DetailsController@reOrder',
                'as' => 'CMS.product.details.reOrder']);

            Route::post('/delete', [
                'uses' => 'Admin\Product\DetailsController@delete',
                'as' => 'CMS.product.details.delete']);

        });

        Route::group(['prefix' => 'included'], function () {

            Route::get('/', [
                'uses' => 'Admin\Product\IncludedController@index',
                'as' => 'CMS.product.included.list']);

            Route::get('/create', [
                'uses' => 'Admin\Product\IncludedController@create',
                'as' => 'CMS.product.included.create']);

            Route::get('/update/{id}', [
                'uses' => 'Admin\Product\IncludedController@update',
                'as' => 'CMS.product.included.update']);

            Route::post('/store', [
                'uses' => 'Admin\Product\IncludedController@store',
                'as' => 'CMS.product.included.store']);

            Route::post('/reOrder', [
                'uses' => 'Admin\Product\IncludedController@reOrder',
                'as' => 'CMS.product.included.reOrder']);

            Route::post('/delete', [
                'uses' => 'Admin\Product\IncludedController@delete',
                'as' => 'CMS.product.included.delete']);

        });







    });



    Route::group(['prefix' => 'menu'], function () {

        Route::get('/', [
            'uses' => 'Admin\Menu\MenuController@index',
            'as' => 'CMS.menu.list']);

        Route::get('/create', [
            'uses' => 'Admin\Menu\MenuController@create',
            'as' => 'CMS.menu.create']);

        Route::get('/update/{id}', [
            'uses' => 'Admin\Menu\MenuController@update',
            'as' => 'CMS.menu.update']);

        Route::post('/store', [
            'uses' => 'Admin\Menu\MenuController@store',
            'as' => 'CMS.menu.store']);

        Route::post('/reOrder', [
            'uses' => 'Admin\Menu\MenuController@reOrder',
            'as' => 'CMS.menu.reOrder']);

        Route::post('/delete', [
            'uses' => 'Admin\Menu\MenuController@delete',
            'as' => 'CMS.menu.delete']);

    });





    Route::group(['prefix' => 'footerMenu'], function () {



        Route::get('/', [
            'uses' => 'Admin\Menu\FooterController@columns',
            'as' => 'CMS.footerMenu.columns']);



        Route::group(['prefix' => '{columnId}'], function () {

            Route::get('/', [
                'uses' => 'Admin\Menu\FooterController@index',
                'as' => 'CMS.footerMenu.list']);

            Route::get('/create', [
                'uses' => 'Admin\Menu\FooterController@create',
                'as' => 'CMS.footerMenu.create']);

            Route::get('/update/{id}', [
                'uses' => 'Admin\Menu\FooterController@update',
                'as' => 'CMS.footerMenu.update']);

            Route::post('/store', [
                'uses' => 'Admin\Menu\FooterController@store',
                'as' => 'CMS.footerMenu.store']);

            Route::post('/reOrder', [
                'uses' => 'Admin\Menu\FooterController@reOrder',
                'as' => 'CMS.footerMenu.reOrder']);

            Route::post('/delete', [
                'uses' => 'Admin\Menu\FooterController@delete',
                'as' => 'CMS.footerMenu.delete']);
        });


    });

    Route::group(['prefix' => 'faq'], function () {

        Route::get('/', [
            'uses' => 'Admin\Faq\FaqController@index',
            'as' => 'CMS.faq.list']);

        Route::get('/create', [
            'uses' => 'Admin\Faq\FaqController@create',
            'as' => 'CMS.faq.create']);

        Route::get('/update/{id}', [
            'uses' => 'Admin\Faq\FaqController@update',
            'as' => 'CMS.faq.update']);

        Route::post('/store', [
            'uses' => 'Admin\Faq\FaqController@store',
            'as' => 'CMS.faq.store']);

        Route::post('/reOrder', [
            'uses' => 'Admin\Faq\FaqController@reOrder',
            'as' => 'CMS.faq.reOrder']);

        Route::post('/delete', [
            'uses' => 'Admin\Faq\FaqController@delete',
            'as' => 'CMS.faq.delete']);

    });




    Route::group(['prefix' => 'tutorials'], function () {


        Route::group(['prefix' => 'tags'], function () {

            Route::get('/', [
                'uses' => 'Admin\Faq\TutorialTagsController@index',
                'as' => 'CMS.tutorials.tags.list']);

            Route::get('/create', [
                'uses' => 'Admin\Faq\TutorialTagsController@create',
                'as' => 'CMS.tutorials.tags.create']);

            Route::get('/update/{id}', [
                'uses' => 'Admin\Faq\TutorialTagsController@update',
                'as' => 'CMS.tutorials.tags.update']);

            Route::post('/store', [
                'uses' => 'Admin\Faq\TutorialTagsController@store',
                'as' => 'CMS.tutorials.tags.store']);

            Route::post('/reOrder', [
                'uses' => 'Admin\Faq\TutorialTagsController@reOrder',
                'as' => 'CMS.tutorials.tags.reOrder']);

            Route::post('/delete', [
                'uses' => 'Admin\Faq\TutorialTagsController@delete',
                'as' => 'CMS.tutorials.tags.delete']);

        });

        Route::group(['prefix' => '/{tag}'], function () {
            Route::get('/', [
                'uses' => 'Admin\Faq\TutorialsController@index',
                'as' => 'CMS.tutorials.list']);

            Route::get('/create', [
                'uses' => 'Admin\Faq\TutorialsController@create',
                'as' => 'CMS.tutorials.create']);

            Route::get('/update/{id}', [
                'uses' => 'Admin\Faq\TutorialsController@update',
                'as' => 'CMS.tutorials.update']);

            Route::post('/store', [
                'uses' => 'Admin\Faq\TutorialsController@store',
                'as' => 'CMS.tutorials.store']);

            Route::post('/reOrder', [
                'uses' => 'Admin\Faq\TutorialsController@reOrder',
                'as' => 'CMS.tutorials.reOrder']);

            Route::post('/delete', [
                'uses' => 'Admin\Faq\TutorialsController@delete',
                'as' => 'CMS.tutorials.delete']);

        });







    });



    Route::group(['prefix' => 'projects'], function () {


        Route::get('/', [
            'uses' => 'Admin\Projects\ProjectsController@index',
            'as' => 'CMS.projects.list']);

        Route::get('/create', [
            'uses' => 'Admin\Projects\ProjectsController@create',
            'as' => 'CMS.projects.create']);

        Route::get('/update/{id}', [
            'uses' => 'Admin\Projects\ProjectsController@update',
            'as' => 'CMS.projects.update']);

        Route::post('/store', [
            'uses' => 'Admin\Projects\ProjectsController@store',
            'as' => 'CMS.projects.store']);

        Route::post('/reOrder', [
            'uses' => 'Admin\Projects\ProjectsController@reOrder',
            'as' => 'CMS.projects.reOrder']);

        Route::post('/delete', [
            'uses' => 'Admin\Projects\ProjectsController@delete',
            'as' => 'CMS.projects.delete']);


        Route::group(['prefix' => 'tags'], function () {


            Route::get('/', [
                'uses' => 'Admin\Projects\TagsController@index',
                'as' => 'CMS.projects.tags.list']);

            Route::get('/create', [
                'uses' => 'Admin\Projects\TagsController@create',
                'as' => 'CMS.projects.tags.create']);

            Route::get('/update/{id}', [
                'uses' => 'Admin\Projects\TagsController@update',
                'as' => 'CMS.projects.tags.update']);

            Route::post('/store', [
                'uses' => 'Admin\Projects\TagsController@store',
                'as' => 'CMS.projects.tags.store']);

            Route::post('/reOrder', [
                'uses' => 'Admin\Projects\TagsController@reOrder',
                'as' => 'CMS.projects.tags.reOrder']);

            Route::post('/delete', [
                'uses' => 'Admin\Projects\TagsController@delete',
                'as' => 'CMS.projects.tags.delete']);

        });


    });



    Route::group(['prefix' => 'contact'], function () {


        Route::get('/', [
            'uses' => 'Admin\Contact\ContactController@index',
            'as' => 'CMS.contact.list']);

        Route::get('/create', [
            'uses' => 'Admin\Contact\ContactController@create',
            'as' => 'CMS.contact.create']);

        Route::get('/update/{id}', [
            'uses' => 'Admin\Contact\ContactController@update',
            'as' => 'CMS.contact.update']);

        Route::post('/store', [
            'uses' => 'Admin\Contact\ContactController@store',
            'as' => 'CMS.contact.store']);

        Route::post('/reOrder', [
            'uses' => 'Admin\Contact\ContactController@reOrder',
            'as' => 'CMS.contact.reOrder']);

        Route::post('/delete', [
            'uses' => 'Admin\Contact\ContactController@delete',
            'as' => 'CMS.contact.delete']);

    });





    Route::group(['prefix' => 'home'], function () {





        Route::group(['prefix' => 'home-head'], function () {

            Route::get('/update/{id}', [
                'uses' => 'Admin\Home\HeadController@update',
                'as' => 'CMS.home.head.update']);

            Route::post('/store', [
                'uses' => 'Admin\Home\HeadController@store',
                'as' => 'CMS.home.head.store']);

        });


        Route::group(['prefix' => 'home-soft'], function () {

            Route::get('/update/{id}', [
                'uses' => 'Admin\Home\SoftController@update',
                'as' => 'CMS.home.soft.update']);

            Route::post('/store', [
                'uses' => 'Admin\Home\SoftController@store',
                'as' => 'CMS.home.soft.store']);

        });




        Route::group(['prefix' => 'wely-hube'], function () {


        Route::get('/', [
            'uses' => 'Admin\Home\WelyHubeController@index',
            'as' => 'CMS.home.welyhube.list']);

        Route::get('/create', [
            'uses' => 'Admin\Home\WelyHubeController@create',
            'as' => 'CMS.home.welyhube.create']);

        Route::get('/update/{id}', [
            'uses' => 'Admin\Home\WelyHubeController@update',
            'as' => 'CMS.home.welyhube.update']);

        Route::post('/store', [
            'uses' => 'Admin\Home\WelyHubeController@store',
            'as' => 'CMS.home.welyhube.store']);

        Route::post('/reOrder', [
            'uses' => 'Admin\Home\WelyHubeController@reOrder',
            'as' => 'CMS.home.welyhube.reOrder']);

        Route::post('/delete', [
            'uses' => 'Admin\Home\WelyHubeController@delete',
            'as' => 'CMS.home.welyhube.delete']);

        });



        Route::group(['prefix' => 'advantage'], function () {

            Route::get('/update/{id}', [
                'uses' => 'Admin\Home\AdvantageController@update',
                'as' => 'CMS.home.advantage.update']);

            Route::post('/store', [
                'uses' => 'Admin\Home\AdvantageController@store',
                'as' => 'CMS.home.advantage.store']);




            Route::group(['prefix' => 'data'], function () {


                Route::get('/', [
                    'uses' => 'Admin\Home\AdvantageController@listData',
                    'as' => 'CMS.home.advantage.data.list']);

                Route::get('/create', [
                    'uses' => 'Admin\Home\AdvantageController@createData',
                    'as' => 'CMS.home.advantage.data.create']);

                Route::get('/update/{id}', [
                    'uses' => 'Admin\Home\AdvantageController@updateData',
                    'as' => 'CMS.home.advantage.data.update']);

                Route::post('/store', [
                    'uses' => 'Admin\Home\AdvantageController@storeData',
                    'as' => 'CMS.home.advantage.data.store']);

                Route::post('/reOrder', [
                    'uses' => 'Admin\Home\AdvantageController@reOrderData',
                    'as' => 'CMS.home.advantage.data.reOrder']);

                Route::post('/delete', [
                    'uses' => 'Admin\Home\AdvantageController@deleteData',
                    'as' => 'CMS.home.advantage.data.delete']);

            });



        });




    });

    Route::group(['prefix' => 'partners'], function () {


        Route::get('/', [
            'uses' => 'Admin\Partners\PartnersController@index',
            'as' => 'CMS.partners.list']);

        Route::get('/create', [
            'uses' => 'Admin\Partners\PartnersController@create',
            'as' => 'CMS.partners.create']);

        Route::get('/update/{id}', [
            'uses' => 'Admin\Partners\PartnersController@update',
            'as' => 'CMS.partners.update']);

        Route::post('/store', [
            'uses' => 'Admin\Partners\PartnersController@store',
            'as' => 'CMS.partners.store']);

        Route::post('/reOrder', [
            'uses' => 'Admin\Partners\PartnersController@reOrder',
            'as' => 'CMS.partners.reOrder']);


        Route::post('/delete', [
            'uses' => 'Admin\Partners\PartnersController@delete',
            'as' => 'CMS.partners.delete']);

    });


    Route::group(['prefix' => 'software'], function () {

        Route::get('/', [
            'uses' => 'Admin\Software\SoftwareController@index',
            'as' => 'CMS.software.index']);


        Route::post('/store', [
            'uses' => 'Admin\Software\SoftwareController@store',
            'as' => 'CMS.software.store']);


        Route::group(['prefix' => 'pricing'], function () {

            Route::get('/', [
                'uses' => 'Admin\Software\PricingController@index',
                'as' => 'CMS.software.pricing.list']);

            Route::get('/create', [
                'uses' => 'Admin\Software\PricingController@create',
                'as' => 'CMS.software.pricing.create']);

            Route::get('/update/{id}', [
                'uses' => 'Admin\Software\PricingController@update',
                'as' => 'CMS.software.pricing.update']);

            Route::post('/store', [
                'uses' => 'Admin\Software\PricingController@store',
                'as' => 'CMS.software.pricing.store']);

            Route::post('/reOrder', [
                'uses' => 'Admin\Software\PricingController@reOrder',
                'as' => 'CMS.software.pricing.reOrder']);

            Route::post('/delete', [
                'uses' => 'Admin\Software\PricingController@delete',
                'as' => 'CMS.software.pricing.delete']);


            Route::group(['prefix' => 'parameters'], function () {

                Route::get('/', [
                    'uses' => 'Admin\Software\PricingParametersController@index',
                    'as' => 'CMS.software.pricing.parameters.list']);

                Route::get('/create', [
                    'uses' => 'Admin\Software\PricingParametersController@create',
                    'as' => 'CMS.software.pricing.parameters.create']);

                Route::get('/update/{id}', [
                    'uses' => 'Admin\Software\PricingParametersController@update',
                    'as' => 'CMS.software.pricing.parameters.update']);

                Route::post('/store', [
                    'uses' => 'Admin\Software\PricingParametersController@store',
                    'as' => 'CMS.software.pricing.parameters.store']);

                Route::post('/reOrder', [
                    'uses' => 'Admin\Software\PricingParametersController@reOrder',
                    'as' => 'CMS.software.pricing.parameters.reOrder']);

                Route::post('/delete', [
                    'uses' => 'Admin\Software\PricingParametersController@delete',
                    'as' => 'CMS.software.pricing.parameters.delete']);
            });


        });


    });

    Route::group(['prefix' => 'about'], function () {

        Route::get('/', [
            'uses' => 'Admin\About\AboutController@index',
            'as' => 'CMS.about.index']);


        Route::post('/store', [
            'uses' => 'Admin\About\AboutController@store',
            'as' => 'CMS.about.store']);


        Route::group(['prefix' => 'teams'], function () {


            Route::get('/', [
                'uses' => 'Admin\About\TeamsController@index',
                'as' => 'CMS.teams.list']);

            Route::get('/create', [
                'uses' => 'Admin\About\TeamsController@create',
                'as' => 'CMS.teams.create']);

            Route::get('/update/{id}', [
                'uses' => 'Admin\About\TeamsController@update',
                'as' => 'CMS.teams.update']);

            Route::post('/store', [
                'uses' => 'Admin\About\TeamsController@store',
                'as' => 'CMS.teams.store']);

            Route::post('/reOrder', [
                'uses' => 'Admin\About\TeamsController@reOrder',
                'as' => 'CMS.teams.reOrder']);


            Route::post('/delete', [
                'uses' => 'Admin\About\TeamsController@delete',
                'as' => 'CMS.teams.delete']);


        });

        Route::group(['prefix' => 'experience'], function () {


            Route::get('/', [
                'uses' => 'Admin\About\ExperienceController@index',
                'as' => 'CMS.experience.list']);

            Route::get('/create', [
                'uses' => 'Admin\About\ExperienceController@create',
                'as' => 'CMS.experience.create']);

            Route::get('/update/{id}', [
                'uses' => 'Admin\About\ExperienceController@update',
                'as' => 'CMS.experience.update']);

            Route::post('/store', [
                'uses' => 'Admin\About\ExperienceController@store',
                'as' => 'CMS.experience.store']);

            Route::post('/reOrder', [
                'uses' => 'Admin\About\ExperienceController@reOrder',
                'as' => 'CMS.experience.reOrder']);


            Route::post('/delete', [
                'uses' => 'Admin\About\ExperienceController@delete',
                'as' => 'CMS.experience.delete']);


        });

    });


    Route::group(['prefix' => 'clients'], function () {


        Route::get('/', [
            'uses' => 'Admin\Clients\ClientsController@index',
            'as' => 'CMS.clients.list']);

        Route::get('/create', [
            'uses' => 'Admin\Clients\ClientsController@create',
            'as' => 'CMS.clients.create']);

        Route::get('/update/{id}', [
            'uses' => 'Admin\Clients\ClientsController@update',
            'as' => 'CMS.clients.update']);

        Route::post('/store', [
            'uses' => 'Admin\Clients\ClientsController@store',
            'as' => 'CMS.clients.store']);

        Route::post('/reOrder', [
            'uses' => 'Admin\Clients\ClientsController@reOrder',
            'as' => 'CMS.clients.reOrder']);


        Route::post('/delete', [
            'uses' => 'Admin\Clients\ClientsController@delete',
            'as' => 'CMS.clients.delete']);


    });

    Route::group(['prefix' => 'solutions'], function () {


        Route::get('/', [
            'uses' => 'Admin\Solutions\SolutionsController@index',
            'as' => 'CMS.solutions.list']);

        Route::get('/create', [
            'uses' => 'Admin\Solutions\SolutionsController@create',
            'as' => 'CMS.solutions.create']);

        Route::get('/update/{id}', [
            'uses' => 'Admin\Solutions\SolutionsController@update',
            'as' => 'CMS.solutions.update']);

        Route::post('/store', [
            'uses' => 'Admin\Solutions\SolutionsController@store',
            'as' => 'CMS.solutions.store']);

        Route::post('/reOrder', [
            'uses' => 'Admin\Solutions\SolutionsController@reOrder',
            'as' => 'CMS.solutions.reOrder']);


        Route::post('/delete', [
            'uses' => 'Admin\Solutions\SolutionsController@delete',
            'as' => 'CMS.solutions.delete']);


    });


    Route::group(['prefix' => 'privacy'], function () {

        Route::get('/', [
            'uses' => 'Admin\Privacy\PrivacyController@index',
            'as' => 'CMS.privacy.index']);


        Route::post('/store', [
            'uses' => 'Admin\Privacy\PrivacyController@store',
            'as' => 'CMS.Privacy.store']);


    });


    Route::group(['prefix' => 'terms'], function () {

        Route::get('/', [
            'uses' => 'Admin\Terms\TermsController@index',
            'as' => 'CMS.terms.index']);


        Route::post('/store', [
            'uses' => 'Admin\Terms\TermsController@store',
            'as' => 'CMS.terms.store']);


    });


    //Functions Controller
    Route::post('/set-model-data-active', [
        'uses' => 'Admin\FunctionsController@setActive',
        'as' => 'CMS.setModelActive']);

    Route::post('/set-sortable-data', [
        'uses' => 'Admin\FunctionsController@setSortable',
        'as' => 'CMS.setSortableData']);

    Route::post('/remove-model-image', [
        'uses' => 'Admin\FunctionsController@removeModelImg',
        'as' => 'CMS.removeModelImg']);

    Route::post('/remove-model-video', [
        'uses' => 'Admin\FunctionsController@removeModelVideo',
        'as' => 'CMS.removeModelVideo']);

    Route::post('/sort-images', [
        'uses' => 'Admin\FunctionsController@sortImages',
        'as' => 'CMS.sortImages']);


});




//for front routes

Route::get('/blankPage', function () {
    return view('app.pages.blankPage');
});

Route::get('/', function () {
    return view('app.pages.home');
});

Route::get('/health-insurance', function () {
    return view('app.pages.healthInsurance');
});

Route::get('/ecoist', function () {
    return view('app.pages.ecoist');
});

Route::get('/about', function () {
    return view('app.pages.about');

});


Route::get('/policy-medi', function () {
    return view('app.pages.policyMedi');
});
Route::get('/contact', function () {
    return view('app.pages.contact');

});

Route::get('/policy-details', function () {
    return view('app.pages.policyDetails');

});

Route::get('/policy-compare', function () {
    return view('app.pages.policyCompare');

});

Route::get('/policy-exclusive', function () {
    return view('app.pages.policyExclusive');

});


Route::get('/policy-travel', function () {
    return view('app.pages.policyTravel');

});

Route::get('/refund', function () {
    return view('app.pages.refund');
});

Route::get('/news', function () {
    return view('app.pages.news');

});

Route::get('/article', function () {
    return view('app.pages.article');

});

Route::get('/business-insurance', function () {
    return view('app.pages.businessInsurance');

});

Route::get('/business-insurance-risks', function () {
    return view('app.pages.businessInsuranceRisks');
});
Route::get('/business-insurance-risks-inner', function () {
    return view('app.pages.businessInsuranceRisksInner');
});
Route::get('/about-history', function () {
    return view('app.pages.aboutHistory');
});
Route::get('/about-finance', function () {
    return view('app.pages.aboutFinance');
});
Route::get('/third-party', function () {
    return view('app.pages.thirdParty');

});

Route::get('/media-release', function () {
    return view('app.pages.mediaRelease');
});
Route::get('/provider-clinics', function () {
    return view('app.pages.providerClinics');
});


Route::get('/media-gallery', function () {
    return view('app.pages.mediaGallery');

});


Route::get('/agents', function () {
    return view('app.pages.agents');

});

Route::get('/agent', function () {
    return view('app.pages.agent');

});

Route::get('/how-to-use', function () {
    return view('app.pages.howToUse');

});

Route::get('/faq', function () {
    return view('app.pages.faq');

});

Route::get('/faq-inner', function () {
    return view('app.pages.faqInner');

});

Route::get('/vacancy', function () {
    return view('app.pages.vacancy');

});


Route::get('/about-mission', function () {
    return view('app.pages.aboutMission');

});

Route::get('/about-partners', function () {
    return view('app.pages.aboutPartners');

});

Route::get('/about-management', function () {
    return view('app.pages.aboutManagement');

});

Route::get('/terms', function () {
    return view('app.pages.terms');

});


Route::get('/suggestion', function () {
    return view('app.pages.suggestion');

});

Route::get('/brand-platform', function () {
    return view('app.pages.brandPlatform');

});



Route::get('/basis', function () {
    return view('app.pages.basis');

});

























