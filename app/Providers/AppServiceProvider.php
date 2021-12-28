<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\users;
use Illuminate\Support\Facades\Gate;

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
        Gate::define('superadmin', function (users $users) {
            return $users->role == '1';
        });

        Gate::define('admin', function (users $users) {
            return $users->role == '2';
        });
    }
}
