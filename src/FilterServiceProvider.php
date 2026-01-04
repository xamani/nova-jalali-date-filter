<?php

namespace Xamani\JalaliDateFilter;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FilterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('jalali-date-filter', __DIR__ . '/../dist/js/filter.js');
            Nova::style('jalali-date-filter', __DIR__ . '/../dist/css/filter.css');
        });
    }
}
