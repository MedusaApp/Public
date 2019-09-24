<?php
namespace PersonalityAssets;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/assets/images' => public_path('images'),
        ], 'public');
    }
}