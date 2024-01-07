<?php

namespace App\Filament\Resources\SermonsResource\Pages;

use App\Filament\Resources\SermonsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSermons extends ListRecords
{
    protected static string $resource = SermonsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
