<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('isUser', function ($user){
        return $user->userLevel == 1;
        });

        Gate::define('isBusinessUnit', function ($user){
        return $user->userLevel == 2;
        });

        Gate::define('isManager', function ($user){
        return $user->userLevel == 3;
        });

        
    }

}