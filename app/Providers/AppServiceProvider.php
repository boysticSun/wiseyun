<?php

namespace App\Providers;

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
        \App\Models\User::observe(\App\Observers\UserObserver::class);
		// \App\Models\Purchase::observe(\App\Observers\PurchaseObserver::class);
		// \App\Models\Supply::observe(\App\Observers\SupplyObserver::class);
        \App\Models\GoodsTypePurchase::observe(\App\Observers\GoodsTypePurchaseObserver::class);
        \App\Models\GoodsTypeSupply::observe(\App\Observers\GoodsTypeSupplyObserver::class);
		\App\Models\News::observe(\App\Observers\NewsObserver::class);
        \Illuminate\Pagination\Paginator::useBootstrap();
    }
}
