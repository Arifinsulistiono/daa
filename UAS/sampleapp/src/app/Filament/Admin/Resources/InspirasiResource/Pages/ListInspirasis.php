<?php

namespace App\Filament\Admin\Resources\InspirasiResource\Pages;

use App\Filament\Admin\Resources\InspirasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInspirasis extends ListRecords
{
    protected static string $resource = InspirasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
