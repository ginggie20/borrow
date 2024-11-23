<?php

namespace App\Filament\Resources\ItemResource\Widgets;

use App\Filament\Resources\BorrowResource\Pages;
use App\Models\Item;
use Filament\Support\Enums\Alignment;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class AvailableItemsWidget2 extends BaseWidget
{
    protected int|string|array $columnSpan = '2';

    public function table(Table $table): Table
    {
        return $table
            ->query(fn () => Item::where('item_state', 'available' && 'category_item_id', '2'))
            ->columns([
                Tables\Columns\TextColumn::make('CategoryItem.category_name')
                    ->label('Category')
                    ->searchable()
                    ->alignment(Alignment::Start),
                Tables\Columns\TextColumn::make('item_code')
                    ->label('Code')
                    ->searchable()
                    ->alignment(Alignment::Start),
                Tables\Columns\TextColumn::make('item_name')
                    ->label('Name')
                    ->searchable()
                    ->alignment(Alignment::Start),

            ]);
    }

    public static function getPages()
    {
        return [
            'createborrow' => Pages\createborrow::route('/create'),
        ];
    }
}
