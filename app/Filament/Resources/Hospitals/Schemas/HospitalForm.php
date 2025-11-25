<?php

namespace App\Filament\Resources\Hospitals\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class HospitalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('facility_name')
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('registration_number')
                    ->required(),
                Select::make('institution_type')
                    ->options([
            'hospital' => 'Hospital',
            'clinic' => 'Clinic',
            'laboratory' => 'Laboratory',
            'diagnostic_center' => 'Diagnostic center',
            'other' => 'Other',
        ])
                    ->required(),
                TextInput::make('capacity')
                    ->required()
                    ->numeric()
                    ->default(0),
                Textarea::make('address')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('contact_person')
                    ->required(),
                TextInput::make('city'),
                TextInput::make('state'),
                TextInput::make('country')
                    ->required()
                    ->default('Nigeria'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('website'),
                TextInput::make('contact_person_phone')
                    ->tel()
                    ->required(),
                TextInput::make('contact_person_email')
                    ->email(),
                TextInput::make('number_of_doctors')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('facilities_available'),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('logo_path'),
                Toggle::make('is_approved')
                    ->required(),
            ]);
    }
}
