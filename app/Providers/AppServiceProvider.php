<?php

namespace App\Providers;

use App\Models\Faq;
use App\Models\Service;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        //FAQ's
        view()->share('faqs',
        Faq::where('is_visible', '1')->get());

        //Services
        view()->share('servicesList',
        Service::where('is_visible', '1')->get());
    }
}
