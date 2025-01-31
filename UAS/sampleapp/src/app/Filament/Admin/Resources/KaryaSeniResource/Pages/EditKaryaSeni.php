<?php

namespace App\Filament\Admin\Resources\KaryaSeniResource\Pages;

use App\Filament\Admin\Resources\KaryaSeniResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKaryaSeni extends EditRecord
{
    protected static string $resource = KaryaSeniResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
