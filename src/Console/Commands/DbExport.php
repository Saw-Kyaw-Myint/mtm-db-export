<?php

namespace MTM\DBEXPORT\Console\Commands;

use Illuminate\Console\Command;

class DbExport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:db-export';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'MTM Database Export Package';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo "Database Export Commands";
    }
}
