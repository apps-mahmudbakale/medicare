<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DoctorsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                    ->required()
                    ->maxLength(255),
                TextInput::make('phone')
                    ->required()
                    ->maxLength(255),
                TextInput::make('license_number')
                    ->required()
                    ->maxLength(255),
                TextInput::make('experience_years')
                    ->required()
                    ->maxLength(255),
                TextInput::make('specialization')
                    ->required()
                    ->maxLength(255),
                TextInput::make('hospital')
                    ->required()
                    ->maxLength(255),
                TextInput::make('address')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
