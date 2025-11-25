<?php

namespace App\Filament\App\Resources\Doctors\Pages;

use App\Filament\App\Resources\Doctors\DoctorsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDoctors extends CreateRecord
{
    protected static string $resource = DoctorsResource::class;
}
