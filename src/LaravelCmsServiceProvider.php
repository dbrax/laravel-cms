<?php

namespace Epmnzava\LaravelCms;

use Illuminate\Support\ServiceProvider;

class LaravelCmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-cms');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-cms');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-cms.php'),
            ], 'config');

            $this->commands([
             
            ]);

            
                        //publishing migrations here..
                        if (!class_exists('CreateMediaTable') && !class_exists('CreateMenusTable') && !class_exists('CreatePagesTable') && !class_exists('CreateSubMenusTable') && !class_exists('CreateSlidersTable') && !class_exists('CreateHeroSectionTable')) {
                            $this->publishes([
            
                                __DIR__ . '/../database/migrations/create_herosections_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_herosections_table.php'),
            
                                __DIR__ . '/../database/migrations/create_medias_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_medias_table.php'),
            
                                __DIR__ . '/../database/migrations/create_menus_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_menus_table.php'),



                                __DIR__ . '/../database/migrations/create_pages_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_pages_table.php'),
                                __DIR__ . '/../database/migrations/create_sliders_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_sliders_table.php'),
                                __DIR__ . '/../database/migrations/create_submenus_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_submenus_table.php'),

            
            
                            ], 'migrations');
                        }

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-cms'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-cms'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-cms'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-cms');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-cms', function () {
            return new LaravelCms;
        });
    }
}
