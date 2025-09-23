<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Custom directive @datetime($date)
        Blade::directive('datetime', function ($expression) {
            // menghasilkan PHP untuk menformat tanggal
            return "<?php echo ($expression) ? \\Carbon\\Carbon::parse($expression)->format('j F Y H:i') : ''; ?>";
        });

        // Contoh directive @currency( amount )
        Blade::directive('currency', function ($expression) {
            return "<?php echo 'Rp ' . number_format($expression,0,',','.'); ?>";
        });
    }
}
