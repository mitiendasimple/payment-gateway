<?php

namespace MiTiendaSimple\PaymentGateway\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class PaymentGatewayServiceProvider
 * @package MiTiendaSimple\PaymentGateway\Providers
 */
class PaymentGatewayServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    public function register()
    {
        parent::register(); // TODO: Change the autogenerated stub
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/payment-gateway.php' => config_path('payment-gateway.php')
        ], 'config');

        $this->publishes([
            __DIR__ . '/../../database/migrations' => database_path('migrations')
        ], 'migrations');
    }
}