<?php

namespace App\Providers;

use App\Models\Finance;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('manage', function (User $user, $model) {
            return $user->id === $model->user_id;
        });
    }
}
