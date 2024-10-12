<?php

namespace App\Filament\Resources\KategoriAlatBeratResource\Pages;

use App\Filament\Resources\KategoriAlatBeratResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriAlatBerat extends EditRecord
{
    protected static string $resource = KategoriAlatBeratResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
