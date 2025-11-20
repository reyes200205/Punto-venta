<?php

namespace App\Filament\Admin\Resources\PurchaseDetails\Pages;

use App\Filament\Admin\Resources\PurchaseDetails\PurchaseDetailResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPurchaseDetails extends ListRecords
{
    protected static string $resource = PurchaseDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
