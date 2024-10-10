<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BorrowResource\Pages;
use App\Models\Borrow;
use App\Models\Item;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BorrowResource extends Resource
{
    protected static ?string $model = Borrow::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('borrow_name'),
                DatePicker::make('borrow_start')
                    ->format('d M Y')
                    ->default(now()),
                Select::make('item_id')
                    ->multiple()
                    ->preload()
                    ->relationship('items', 'item_name')
                    ->options(function () {
                        return Item::where('item_state', 1)->pluck('item_name', 'id');
                    }),
                Select::make('borrow_status')
                    ->options([
                        'pending' => 'Pending',
                        'active' => 'Active',
                        'finish' => 'Finish',
                    ])
                    ->default('pending'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('borrow_name'),
                TextColumn::make('item_borow.item_id')
                    ->label('Borrowed Items')
                    ->limit(50),
                TextColumn::make('borrow_start')
                    ->date('d M Y'),
                TextColumn::make('borrow_status')
                    ->badge(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBorrows::route('/'),
            'create' => Pages\CreateBorrow::route('/create'),
            'edit' => Pages\EditBorrow::route('/{record}/edit'),
        ];
    }
}
