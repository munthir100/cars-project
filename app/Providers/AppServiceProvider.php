<?php

namespace App\Providers;

use App\Models\User;
use Laravel\Pennant\Feature;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('edit-settings', function (User $user) {
            return true;
        });
    }
}
