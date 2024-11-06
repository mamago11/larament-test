<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('amount_due')
                    ->label('Amount Due')
                    ->numeric()
                    ->required(),
                TextInput::make('amount_paid')
                    ->label('Amount Paid')
                    ->numeric()
                    ->required(),
                Select::make('order_status_id')
                    ->relationship('order_status', 'label')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('label')
                            ->required()
                            ->maxLength(255),
                        ColorPicker::make('color'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('amount_due')
                    ->label('Amount Due'),
                TextColumn::make('amount_paid')
                    ->label('Amount Paid'),
                TextColumn::make('order_status.label')
                    ->badge()
                    ->color(function (Order $order) {
                        return Color::hex($order->order_status->color);
                    })
                    ->listWithLineBreaks(),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
