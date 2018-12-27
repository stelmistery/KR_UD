<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isUser', function ($user) {
            return $user->user_type == 'user';
        });

//        Gate::define('isPassenger', function ($user) {
//            return $user->user_type == 'passenger';
//        });
//
//        Gate::define('isDriver', function ($user) {
//            return $user->user_type == 'driver';
//        });
        //
    }
}
