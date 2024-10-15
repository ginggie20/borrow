<?php

namespace App\Providers;

use App\Models\Borrow;
use App\Models\ItemBorrow;
use App\Observers\BorrowObserver;
use App\Observers\ItemBorrowObserver;
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
        // Borrow::observe(BorrowObserver::class);
        ItemBorrow::observe(ItemBorrowObserver::class);
    }
}
