<?php

namespace App\Filament\Resources\Services\Schemas;

use App\Models\Hospital;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Select::make('hospital_id')
                    ->label('Hospital')
                    ->options(Hospital::all()->pluck('facility_name', 'id'))
                    ->searchable()
                    ->required(),
                    
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                    
                Textarea::make('description')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                    
                TextInput::make('price')
                    ->numeric()
                    ->prefix('$')
                    ->required(),
                    
                TextInput::make('duration')
                    ->label('Duration (minutes)')
                    ->numeric()
                    ->suffix('minutes')
                    ->required(),
                    
                Checkbox::make('is_available')
                    ->label('Available for booking')
                    ->default(true),
            ]);
    }
}
