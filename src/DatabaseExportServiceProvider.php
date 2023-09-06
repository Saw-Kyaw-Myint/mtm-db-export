<?php

namespace MTM\DBEXPORT;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\ServiceProvider;
use MTM\DBEXPORT\Console\Commands\DbExport;

class DatabaseExportServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        AboutCommand::add('mtm/db-export', fn() =>
            [
                'Version' => '1.0.0',
                'Description' => 'MTM Report Package',
            ]);
        $this->loadRoutesFrom(__DIR__ . '/route.php');
        if ($this->app->runningInConsole()) {
            $this->commands([
                DbExport::class,
            ]);
        }
    }
}
