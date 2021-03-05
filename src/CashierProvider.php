<?php

namespace Cashier;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class CashierProvider extends BaseServiceProvider{
    /**
         * Bootstrap any package services.
         *
         * @return void
         */
        public function boot()
        {
            $this->publishes([
                __DIR__.'/../config/cashier.php' => config_path('cashier.php'),
            ]);
        }
        /**
         * Register any application services.
         *
         * @return void
         */
        public function register()
        {
            $this->mergeConfigFrom(
                __DIR__.'/../config/cashier.php', 'cashier'
            );
            $this->app->bind(CashierClient::class);
        }
}
