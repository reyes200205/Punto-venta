<?php

namespace App\Filament\Admin\Resources\PurchaseDetials\Pages;

use App\Filament\Admin\Resources\PurchaseDetials\PurchaseDetialResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPurchaseDetial extends EditRecord
{
    protected static string $resource = PurchaseDetialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
