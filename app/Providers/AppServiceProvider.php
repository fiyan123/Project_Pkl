<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    
    public function boot()
    {
        Gate::define('admin' , function(User $user){
            return $user->username === 'Admin Project';
        });
        Paginator::useBootstrap();
    }
}
