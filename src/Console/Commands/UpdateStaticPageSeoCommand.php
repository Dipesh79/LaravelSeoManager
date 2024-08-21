<?php

namespace Dipesh79\LaravelSeoManager\Console\Commands;

use Dipesh79\LaravelSeoManager\Models\Seo;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;

/**
 * Class UpdateStaticPageSeoCommand
 *
 * This command updates the static pages' URLs in the database for SEO purposes.
 */
class UpdateStaticPageSeoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seo:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Static Pages Url To Database';

    /**
     * Execute the console command.
     *
     * This method retrieves all routes, filters them based on specific criteria,
     * and updates the SEO table with static page URLs.
     */
    public function handle(): void
    {
        $this->info('SEO: Generating Static Pages Urls');
        $routes = collect(Route::getRoutes())->filter(function ($route) {
            return isset($route->action['middleware']) && in_array('web',
                    $route->action['middleware']) && !in_array('auth',
                    $route->action['middleware']) && isset($route->methods[0]) && (in_array('GET', $route->methods));
        });
        $bar = $this->output->createProgressBar($routes->count());

        foreach ($routes as $route) {
            if ($this->hasDynamicParameters($route->uri)) {
                continue;
            }
            Seo::firstOrCreate(['uri' => $route->uri], ['type' => 'static']);
            $bar->advance();
        }
        $bar->finish();
        $this->line('');
        $this->info('SEO: Static Pages Urls Generated Successfully');
    }

    /**
     * Check if the given URI contains dynamic parameters.
     *
     * @param string $uri The URI to check.
     * @return bool True if the URI contains dynamic parameters, false otherwise.
     */
    private function hasDynamicParameters(string $uri): bool
    {
        return str_contains($uri, '{');
    }
}
