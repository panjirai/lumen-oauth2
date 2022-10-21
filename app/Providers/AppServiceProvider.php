<?php

namespace App\Providers;

use Carbon\Carbon;
use Dusterio\LumenPassport\LumenPassport;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        LumenPassport::tokensExpireIn(Carbon::now()->addMinutes(1440));
    }

    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
