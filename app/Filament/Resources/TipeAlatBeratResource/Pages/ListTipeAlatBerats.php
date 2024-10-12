<?php

namespace App\Filament\Resources\TipeAlatBeratResource\Pages;

use App\Filament\Resources\TipeAlatBeratResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTipeAlatBerats extends ListRecords
{
    protected static string $resource = TipeAlatBeratResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
