<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearAllCaches extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:clear-all-caches';

    // Command description
    protected $description = 'Clear all caches, including config, route, view, and application caches.';

    public function handle()
    {
        // Clear config cache
        $this->call('config:clear');
        $this->info('Config cache cleared');

        // Clear route cache
        $this->call('route:clear');
        $this->info('Route cache cleared');

        // Clear view cache
        $this->call('view:clear');
        $this->info('View cache cleared');

        // Clear application cache
        $this->call('cache:clear');
        $this->info('Application cache cleared');

        // Clear optimized cache (compiled classes)
        $this->call('optimize:clear');
        $this->info('Optimized cache cleared');

        // Clear Filament assets cache
        $this->call('filament:optimize-clear');
        $this->info('Filament assets cache cleared');

        // Restart queue workers if using queues
        $this->call('queue:restart');
        $this->info('Queue workers restarted');

        $this->info('All caches have been cleared successfully!');
    }
}
