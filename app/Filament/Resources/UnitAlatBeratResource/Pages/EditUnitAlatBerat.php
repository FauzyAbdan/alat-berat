<?php

namespace App\Filament\Resources\UnitAlatBeratResource\Pages;

use App\Filament\Resources\UnitAlatBeratResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUnitAlatBerat extends EditRecord
{
    protected static string $resource = UnitAlatBeratResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
