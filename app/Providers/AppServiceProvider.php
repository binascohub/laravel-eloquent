<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // ajuste para sqlite entender foregnkey
        if(config('database.default')) {
            \DB::connection()->getPdo()->exec('PRAGMA foreign_keys=on;');
        }

    }
}
