<?php

namespace App\Filament\Admin\Resources\KaryaSeniResource\Pages;

use App\Filament\Admin\Resources\KaryaSeniResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKaryaSenis extends ListRecords
{
    protected static string $resource = KaryaSeniResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
