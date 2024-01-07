<?php

namespace App\Filament\Resources\SermonsResource\Pages;

use App\Filament\Resources\SermonsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSermons extends EditRecord
{
    protected static string $resource = SermonsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
