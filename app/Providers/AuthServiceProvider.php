<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
         'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('isAdmin', function($user)
        {
            return $user->role == 'admin';
        });

        $gate->define('isFinance/HR', function($user)
        {
            return $user->role == 'finance/hr';
        });

        $gate->define('isEngineer/TechWriter', function($user)
        {
            return $user->role == 'engineer/techwriter';
        });

        $gate->define('isPMO', function($user)
        {
            return $user->role == 'pmo';
        });

        $gate->define('isOthers', function($user)
        {
            return $user->role == 'others';
        });
    }
    
}
