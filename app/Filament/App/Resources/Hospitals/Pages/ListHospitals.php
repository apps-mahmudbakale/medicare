<?php

namespace App\Filament\App\Resources\Hospitals\Pages;

use App\Filament\App\Resources\Hospitals\HospitalResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHospitals extends ListRecords
{
    protected static string $resource = HospitalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
