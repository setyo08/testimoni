<?php

namespace App\Providers;

use App\Models\Feedback;
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
        $result = Feedback::where('is_show', true)->get();
        view()->composer('layouts.home', function ($view) use ($result) {
            $view->with('list_feedback', $result);
        });
    }
}
