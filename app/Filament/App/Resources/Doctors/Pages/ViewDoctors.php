<?php

namespace App\Filament\App\Resources\Doctors\Pages;

use App\Filament\App\Resources\Doctors\DoctorsResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewDoctors extends ViewRecord
{
    protected static string $resource = DoctorsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
