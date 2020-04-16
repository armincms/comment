<?php

namespace Armincms\Comment;
 
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova as LaravelNova; 

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    { 
        LaravelNova::serving([$this, 'servingNova']);
    }

    public function servingNova(ServingNova $event)
    {
        LaravelNova::resources([
            Nova\Comment::class,
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
