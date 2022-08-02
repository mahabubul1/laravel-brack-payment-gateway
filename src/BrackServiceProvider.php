<?php
namespace Mahabub\BrackPayment;
use Illuminate\Support\ServiceProvider;

class BrackServiceProvider extends ServiceProvider {
    
    
 /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        
        $this->publishes([__DIR__.'/resources/cgn' => resource_path('brack/cgn')] ,'resources');
        $this->publishes([ __DIR__ . '/config/brack.php' => config_path('brackpayment.php'),],'brack-config');
    }
}
