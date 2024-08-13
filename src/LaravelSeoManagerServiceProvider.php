<?php

namespace Dipesh79\LaravelSeoManager;

use Dipesh79\LaravelSeoManager\Console\Commands\UpdateStaticPageSeoCommand;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelSeoManagerServiceProvider
 *
 * Service provider for the Laravel SEO Manager package.
 */
class LaravelSeoManagerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * Registers the console commands for the package.
     */
    public function register(): void
    {
        $this->commands(
            [
                UpdateStaticPageSeoCommand::class
            ]
        );
    }

    /**
     * Bootstrap services.
     *
     * Bootstraps the services, loads views, routes, and publishes configuration and migration files.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'seo');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        if (method_exists($this, 'publishes')) {
            if (!Schema::hasTable('seo_tags')) {
                $this->publishes([
                    __DIR__ . '/migrations/create_seo_tags_table.php.stub' => database_path('migrations/' . date('Y_m_d_His',
                            time()) . '_create_seo_tags_table.php'),
                ], 'migrations');
            }

            $this->publishes([
                __DIR__ . '/config/laravel-seo-manager.php' => config_path('laravel-seo-manager.php'),
            ], 'config');
        }

        Blade::component('seo', \Dipesh79\LaravelSeoManager\View\Components\Seo::class);

        Paginator::useBootstrap();
    }
}
