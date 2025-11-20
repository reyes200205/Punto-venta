<?php

namespace App\Filament\Admin\Resources\PurchaseDetials\Pages;

use App\Filament\Admin\Resources\PurchaseDetials\PurchaseDetialResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPurchaseDetials extends ListRecords
{
    protected static string $resource = PurchaseDetialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
