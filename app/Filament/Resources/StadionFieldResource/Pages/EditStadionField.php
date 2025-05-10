<?php

namespace App\Filament\Resources\StadionFieldResource\Pages;

use App\Filament\Resources\StadionFieldResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStadionField extends EditRecord
{
    protected static string $resource = StadionFieldResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
