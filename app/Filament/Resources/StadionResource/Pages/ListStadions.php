<?php

namespace App\Filament\Resources\StadionResource\Pages;

use App\Filament\Resources\StadionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStadions extends ListRecords
{
    protected static string $resource = StadionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
