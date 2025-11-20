<?php

namespace App\Filament\Admin\Resources\PurchaseDetials;

use App\Filament\Admin\Resources\PurchaseDetials\Pages\CreatePurchaseDetial;
use App\Filament\Admin\Resources\PurchaseDetials\Pages\EditPurchaseDetial;
use App\Filament\Admin\Resources\PurchaseDetials\Pages\ListPurchaseDetials;
use App\Filament\Admin\Resources\PurchaseDetials\Schemas\PurchaseDetialForm;
use App\Filament\Admin\Resources\PurchaseDetials\Tables\PurchaseDetialsTable;
use App\Models\PurchaseDetail;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PurchaseDetialResource extends Resource
{
    protected static ?string $model = PurchaseDetail::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return PurchaseDetialForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PurchaseDetialsTable::configure($table);
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
            'index' => ListPurchaseDetials::route('/'),
            'create' => CreatePurchaseDetial::route('/create'),
            'edit' => EditPurchaseDetial::route('/{record}/edit'),
        ];
    }
}
