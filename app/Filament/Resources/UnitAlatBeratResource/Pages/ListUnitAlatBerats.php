<?php

namespace App\Filament\Resources\UnitAlatBeratResource\Pages;

use App\Filament\Resources\UnitAlatBeratResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUnitAlatBerats extends ListRecords
{
    protected static string $resource = UnitAlatBeratResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
