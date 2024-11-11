<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget;
use App\Models\ItemBorrow;
use App\Models\Borrow;

class CurrentActiveBorrowsWidget extends BaseWidget
{
    public static function canView(): bool
    {
        return auth()->user()->hasRole('super_admin');
    }
    protected function getStats(): array
    {
        
            $currentActive = ItemBorrow::where('borrow_state','=','active')->count();
            $currentMonth = Borrow::whereMonth('created_at', '=', now()->month)->count();
            return [
                StatsOverviewWidget\Stat::make('Current Active Borrows', $currentActive),
                StatsOverviewWidget\Stat::make('Current Month Borrows', $currentMonth),
            ];
    }
}
