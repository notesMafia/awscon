<?php

use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group([
    'namespace' => 'App\Http\Controllers\Admin',
    'prefix' => 'admin',
    'as'=>'admin::'
],function (){

    Route::get('/','DashboardController@Index')->name('dashboard');
    Route::get('logout','DashboardController@Logout')->name('logout');

});


Route::group([
    'namespace' => 'App\Livewire\Admin',
    'prefix' => 'admin',
    'as'=>'admin::',
    'middleware' => ['AdminLivewireLayout'],
],function (){

    Route::group([
        'middleware' => ['AdminAuthRedirect'],
        'namespace' => 'Auth',
    ],function (){

        Route::get('login','LoginPage')->name('login');

    });


    Route::group([
        'middleware' => ['AdminAuthCheck']
    ],function (){

        Route::group([
            'namespace' => 'Dashboard',
            'as'=>'dashboard.',
            'prefix' => 'dashboard'
        ],function (){

            Route::get('/','MainDashboardPage')->name('main');

        });

        // Blog Routes
        Route::group([
            'namespace' => 'Post',
            'as'=>'blog.',
            'prefix' => 'blog'
        ],function (){

            Route::group([
                'prefix' => 'post',
                'as'=>'post.'
            ],function (){

                Route::get('list','PostListPage')->name('list');
                Route::get('list/add','PostAddEditPage')->name('add');
                Route::get('list/edit/{post_id}','PostAddEditPage')->name('edit');

            });

            Route::group([
                'prefix' => 'category',
                'as'=>'category.'
            ],function (){

                Route::get('list','PostCategoryPage')->name('list');
                Route::get('list/add','PostCategoryAddEditPage')->name('add');
                Route::get('list/edit/{category_id}','PostCategoryAddEditPage')->name('edit');

            });

            Route::get('tags','PostTagPage')->name('tags');

        });

        // User Routes
        Route::group([
            'namespace' => 'Users',
            'as'=>'users.',
            'prefix' => 'users'
        ],function (){

            Route::get('website','UsersListPage')->name('website');
            Route::get('website/add','UsersAddEditPage')->name('website.add');
            Route::get('website/edit/{user_id}','UsersAddEditPage')->name('website.edit');

            Route::get('team','TeamListPage')->name('team');
            Route::get('team/add','TeamAddEditPage')->name('team.add');
            Route::get('team/edit/{code}','TeamAddEditPage')->name('team.edit');
        });

        Route::group([
            'namespace' => 'Settings',
            'as'=>'settings.',
            'prefix' => 'settings'
        ],function (){

            Route::get('website','WebsiteSettingPage')->name('website');
            Route::get('general','GeneralSettingPage')->name('general');
            Route::get('mail','MailSettingPage')->name('mail');
            Route::get('server-logs','ServerLogPage')->name('server-logs');
            Route::get('server-info','ServerInfoPage')->name('server-info');

        });

        Route::group([
            'namespace' => 'Settings',
        ],function (){

            Route::get('profile','AdminProfilePage')->name('profile');

        });

        Route::group([
            'namespace' => 'Contact',
            'prefix' => 'contact',
            'as'=>'contact:'
        ],function (){

            Route::get('list','ContactFormListPage')->name('list');

        });

        Route::group([
            'namespace' => 'Services',
            'prefix' => 'services',
            'as'=>'services:'
        ],function (){

            Route::get('list','ServiceListPage')->name('list');
            Route::get('list/add','ServiceAddEditPage')->name('add');
            Route::get('list/edit/{service_id}','ServiceAddEditPage')->name('edit');

        });

        Route::group([
            'namespace' => 'Themes',
            'prefix' => 'themes',
            'as'=>'themes:'
        ],function (){

            Route::get('pages','ThemePagesList')->name('pages.list');
            Route::get('pages/add','ThemePagesAddEditPage')->name('pages.add');
            Route::get('pages/edit/{page_id}','ThemePagesAddEditPage')->name('pages.edit');

            Route::get('home-page','ThemeHomePage')->name('home-page');
            Route::get('about-page','ThemeAboutUsPage')->name('about-page');
            Route::get('contact-page','ThemeContactUsPage')->name('contact-page');

        });

    });

    Route::group([
        'namespace' => 'Calculator',
        'prefix' => 'calculator',
        'as'=>'calculator:'
    ],function (){

        Route::get('/','CalculatorMainPage')->name('main');

    });


});

Route::group(['prefix' => 'admin/file-manager', 'middleware' => ['AdminAuthCheck']], function () {
    Lfm::routes();
});

Route::group([
    'namespace' =>'App\Http\Controllers\Admin\Api',
    'prefix' => 'api/admin',
    'as'=>'admin::api.',
    'middleware' => 'ApiAdminAuthCheck'
],function (){

    Route::post('upload','FileUploadController@UploadFile')->name('upload');
    Route::post('revert','FileUploadController@RevertFile')->name('revert');

});
