<?php

namespace App\Providers;

use App\Models\Social;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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
        $data1 = Setting::pluck('value', 'key');
        $data2 = Social::whereStatus(1)->oldest('order')->get();
        View::share('setting', $data1);
        View::share('socialdata', $data2);

        Paginator::useBootstrap();
    }
}
