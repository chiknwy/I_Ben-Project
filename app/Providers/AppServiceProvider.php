<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
    public function boot()
{
    Validator::extend('gambar', function ($attribute, $value, $parameters, $validator) {
        $allowedMimes = ['jpeg', 'png', 'jpg', 'gif', 'svg'];

        if (!is_string($value) && !is_object($value)) {
            return false;
        }

        $extension = strtolower(pathinfo($value->getClientOriginalName(), PATHINFO_EXTENSION));

        return in_array($extension, $allowedMimes);
    });
}
}
