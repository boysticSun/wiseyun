<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
		 \App\Models\SupplyOrderAction::class => \App\Policies\SupplyOrderActionPolicy::class,
		 \App\Models\PurchaseOrderAction::class => \App\Policies\PurchaseOrderActionPolicy::class,
		 \App\Models\SupplyOrder::class => \App\Policies\SupplyOrderPolicy::class,
		 \App\Models\PurchaseOrder::class => \App\Policies\PurchaseOrderPolicy::class,
		 \App\Models\Purchase::class => \App\Policies\PurchasePolicy::class,
		 \App\Models\Supply::class => \App\Policies\SupplyPolicy::class,
		 \App\Models\News::class => \App\Policies\NewsPolicy::class,
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // 修改策略自动发现的逻辑
        Gate::guessPolicyNamesUsing(function ($modelClass) {
            // 动态返回模型对应的策略名称，如：// 'App\Model\User' => 'App\Policies\UserPolicy',
            return 'App\Policies\\'.class_basename($modelClass).'Policy';
        });
    }
}
