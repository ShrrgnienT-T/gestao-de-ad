<?php

namespace App\Providers;

use App\Ldap\Scopes\OnlyAghuseUsers;
use Illuminate\Support\ServiceProvider;
use App\Ldap\Scopes\OnlyAccountingUsers;

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
        // $this->register();


    }
}
