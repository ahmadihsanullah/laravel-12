<?php

namespace App\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('rupiah', function($number) {
            return "<?php echo 'Rp ' . number_format($number, 2, ',', '.'); ?>";
        });

        Blade::if("teman", function ($name) {
            return $name == "ahmad";
        });
    }
}
