<?php

namespace App\Providers;

use App\Http\Icons\IconInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $class = '\App\Http\Icons\\' . ucwords(Str::camel(config('icons.file')));

        $this->app->bind(IconInterface::class, $class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
