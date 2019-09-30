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
            __DIR__ . '/../dist/images' => public_path('images/core'),
            __DIR__ . '/../dist/js' => public_path('js'),
            __DIR__ . '/../dist/css' => public_path('css'),
            __DIR__ . '/../dist/fonts' => public_path('fonts'),
        ], 'core.public');
    }
}