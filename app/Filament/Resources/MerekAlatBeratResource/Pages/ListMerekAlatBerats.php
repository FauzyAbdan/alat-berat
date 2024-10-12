<?php

namespace App\Filament\Resources\MerekAlatBeratResource\Pages;

use App\Filament\Resources\MerekAlatBeratResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMerekAlatBerats extends ListRecords
{
    protected static string $resource = MerekAlatBeratResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
