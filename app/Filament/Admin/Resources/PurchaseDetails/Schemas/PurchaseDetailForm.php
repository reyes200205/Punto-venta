<?php

namespace App\Filament\Admin\Resources\PurchaseDetails\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PurchaseDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('purchase_id')
                    ->required()
                    ->numeric(),
                TextInput::make('product_id')
                    ->required()
                    ->numeric(),
                TextInput::make('quantity')
                    ->required()
                    ->numeric(),
                TextInput::make('total')
                    ->required()
                    ->numeric(),
            ]);
    }
}
