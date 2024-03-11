<?php

namespace App\Providers;

use App\Services\StringUtil\StringDoubler;
use App\Services\StringUtil\StringProcessor;
use App\Services\StringUtil\StringReverser;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(StringProcessor::class,function (){
            return new StringDoubler();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::defaultView('vendor.pagination.bootstrap-5');
    }
}
