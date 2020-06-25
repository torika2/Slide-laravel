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


});



Route::get('login', [
    'uses' => 'Admin\AuthController@login',
    'as' => 'auth.login']);

Route::post('post-login', [
    'uses' => 'Admin\AuthController@postLogin',
    'as' => 'auth.postLogin']);

Route::get('logout', [
    'uses' => 'Admin\AuthController@logout',
    'as' => 'auth.logout']);





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


