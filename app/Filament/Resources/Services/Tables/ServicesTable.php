<?php

namespace App\Filament\Resources\Services\Tables;

use App\Models\Hospital;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Filters\SelectFilter;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                    
                TextColumn::make('hospital.facility_name')
                    ->label('Hospital')
                    ->searchable()
                    ->sortable(),
                    
                TextColumn::make('price')
                    ->money('USD')
                    ->sortable(),
                    
                TextColumn::make('duration')
                    ->label('Duration (min)')
                    ->sortable(),
                    
                IconColumn::make('is_available')
                    ->label('Available')
                    ->boolean()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('hospital')
                    ->relationship('hospital', 'facility_name')
                    ->searchable(),
                    
                SelectFilter::make('is_available')
                    ->options([
                        '1' => 'Available',
                        '0' => 'Not Available',
                    ])
                    ->label('Availability'),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
