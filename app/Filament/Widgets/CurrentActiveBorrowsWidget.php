<?php

namespace App\Filament\Widgets;

use App\Models\Borrow;
use App\Models\Item;
use App\Models\ItemBorrow;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class CurrentActiveBorrowsWidget extends BaseWidget
{
    public static function canView(): bool
    {
        return auth()->user()->hasRole('super_admin');
    }

    protected function getStats(): array
    {

        $currentActive = ItemBorrow::where('borrow_state', '=', 'active')->count();
        $currentMonth = Borrow::whereMonth('created_at', '=', now()->month)->count();
        $available = Item::where('item_state', '=', 'available')->count();

        return [
            StatsOverviewWidget\Stat::make('Current Active Borrows', $currentActive),
            StatsOverviewWidget\Stat::make('Current Month Borrows', $currentMonth),
            StatsOverviewWidget\Stat::make('Available Items', $available),
        ];
    }
}
