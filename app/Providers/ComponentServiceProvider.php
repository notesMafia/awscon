<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ComponentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blade::component('admin.theme.sidebar',\App\View\Components\admin\theme\Sidebar::class);
        Blade::component('admin.theme.navbar',\App\View\Components\admin\theme\navbar::class);
        Blade::component('admin.theme.footer',\App\View\Components\admin\theme\footer::class);

        Blade::component('admin.forms.image-viewer',\App\View\Components\admin\forms\ImageViewer::class);
        Blade::component('admin.forms.phone-input',\App\View\Components\admin\forms\PhoneInput::class);

        Blade::component('forms.input-label',\App\View\Components\forms\inputLabel::class);
    }
}
