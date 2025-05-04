<?php

namespace App\Filament\Resources\GerenteResource\Pages;

use App\Filament\Resources\GerenteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGerentes extends ListRecords
{
    protected static string $resource = GerenteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
