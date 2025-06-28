<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::view('under-maintenance','pages.under-maintenance')
    ->name('under-maintenance');

Route::group([
    'namespace' => 'App\Http\Controllers',
],function (){

    Route::get('test','TestController@Index')->name('test');


    Route::group([
        'namespace' => 'Auth',
    ],function (){

        Route::post('logout', 'LoginController@logout')
            ->middleware('UserAuthCheck')
            ->name('logout');

        Route::group([
            'middleware' => 'UserAuthRedirect',
        ],function (){

            Route::get('login/google', 'LoginController@redirectToGoogle')->name('login.google');
            Route::get('login/google/callback', 'LoginController@handleGoogleCallback');

        });

        Route::group([
            'prefix' => 'password',
            'as'=>'password.',
            'middleware' => "AdminAuthRedirect"
        ],function (){

            Route::get('reset', 'ForgotPasswordController@showLinkRequestForm')->name('request');
            Route::post('email', 'ForgotPasswordController@sendResetLinkEmail')->name('email');
            Route::get('reset/{token}', 'ResetPasswordController@showResetForm')->name('reset');
            Route::post('reset', 'ResetPasswordController@reset')->name('update');

        });

    });

});

Route::group([
    'namespace' => 'App\Livewire\Frontend',
    'as' => 'frontend::',
//    'middleware' => ['ComingSoon']
],function (){

    Route::group([
        'namespace' => 'Pages',
    ],function (){

        Route::get('/','HomePage')->name('home');
        Route::get('about-us','AboutUsPage')->name('about-us');
        Route::get('contact-us','ContactUsPage')->name('contact-us');
        Route::get('faq','FaqPage')->name('faq');

        Route::get('apply-now','ApplyNow')->name('apply-now');

//        Route::get('career','CareerProgramPage')->name('career');
//        Route::get('privacy-policy','PrivacyPage')->name('privacy-policy');
//        Route::get('terms-condition','TermsConditionPage')->name('terms-condition');

    });

    Route::group([
        'namespace' => 'Services',
        'prefix' => 'industries',
        'as' => 'industries:'
    ],function (){

        Route::get('/','ServicePage')->name('main');
        Route::get('detail','SingleServicePage')->name('detail');
    });

    Route::group([
        'namespace' => 'Blog',
        'prefix' => 'blog',
        'as' => 'blog:'
    ],function (){

        Route::get('/','BlogListPage')->name('list');
//        Route::get('search','BlogSearchPage')->name('search');
//        Route::get('category','BlogCategoryPage')->name('category');
        Route::get('detail','BlogPostPage')->name('post');

    });

});

Route::group([
    'namespace' => 'App\Livewire\Frontend\Pages',
    'as' => 'frontend::',
],function (){

    Route::get('{slug}','OtherPage');

});




