<?php

namespace App\Providers;

use App\PaymentMethod\PaymentMethod;
use App\PaymentMethod\PaymentMethodCC;
use App\PaymentMethod\PaymentMethodSA;
use Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(PaymentMethod::class, function ($app) {
            if(request()->pay_method == 'CC'){
                return new PaymentMethodCC();
            } else {
                return new PaymentMethodSA();
            }
        });
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
