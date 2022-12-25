<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(\SimpleSoftwareIO\QrCode\QrCodeServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('money', function ($amount) {
            return "<?php echo 'Rp' . number_format($amount, 2); ?>";
        });
        /// create function for abbreviate string with only 2 characters and uppercase
        Blade::directive('abbr', function ($string) {
            return "<?php echo ucfirst(Str::limit($string, 0, 2)); ?>";
        });

        $this->app->alias(\SimpleSoftwareIO\QrCode\Facades\QrCode::class, 'QrCode');
    }
}
