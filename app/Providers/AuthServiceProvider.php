<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as SuperGate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Receipe' => 'App\Policies\ReceipePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(SuperGate $gate)
    {
        $this->registerPolicies();

        $gate->before(function($user){
            if ($user->isSuperUser()) {
                return true;
            }
        });
    }
}
