<?php

namespace App\Filament\Resources\KategoriAlatBeratResource\Pages;

use App\Filament\Resources\KategoriAlatBeratResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriAlatBerats extends ListRecords
{
    protected static string $resource = KategoriAlatBeratResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
