<?php

namespace App\Filament\Admin\Resources\PurchaseDetails;

use App\Filament\Admin\Resources\PurchaseDetails\Pages\CreatePurchaseDetail;
use App\Filament\Admin\Resources\PurchaseDetails\Pages\EditPurchaseDetail;
use App\Filament\Admin\Resources\PurchaseDetails\Pages\ListPurchaseDetails;
use App\Filament\Admin\Resources\PurchaseDetails\Schemas\PurchaseDetailForm;
use App\Filament\Admin\Resources\PurchaseDetails\Tables\PurchaseDetailsTable;
use App\Models\PurchaseDetail;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PurchaseDetailResource extends Resource
{
    protected static ?string $model = PurchaseDetail::class;

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
    
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return PurchaseDetailForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PurchaseDetailsTable::configure($table);
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
            'index' => ListPurchaseDetails::route('/'),
            'create' => CreatePurchaseDetail::route('/create'),
            'edit' => EditPurchaseDetail::route('/{record}/edit'),
        ];
    }
}
