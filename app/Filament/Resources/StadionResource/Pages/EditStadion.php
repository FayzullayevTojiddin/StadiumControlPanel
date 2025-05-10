<?php

namespace App\Filament\Resources\StadionResource\Pages;

use App\Filament\Resources\StadionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStadion extends EditRecord
{
    protected static string $resource = StadionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
