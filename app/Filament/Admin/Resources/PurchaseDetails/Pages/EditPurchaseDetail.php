<?php

namespace App\Filament\Admin\Resources\PurchaseDetails\Pages;

use App\Filament\Admin\Resources\PurchaseDetails\PurchaseDetailResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPurchaseDetail extends EditRecord
{
    protected static string $resource = PurchaseDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
