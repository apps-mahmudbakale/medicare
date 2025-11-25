<?php

namespace App\Filament\App\Resources\Hospitals;

use App\Filament\App\Resources\Hospitals\Pages\CreateHospital;
use App\Filament\App\Resources\Hospitals\Pages\EditHospital;
use App\Filament\App\Resources\Hospitals\Pages\ListHospitals;
use App\Filament\App\Resources\Hospitals\Schemas\HospitalForm;
use App\Filament\App\Resources\Hospitals\Tables\HospitalsTable;
use App\Models\Hospital;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HospitalResource extends Resource
{
    protected static ?string $model = Hospital::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Hospital';

    public static function form(Schema $schema): Schema
    {
        return HospitalForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HospitalsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHospitals::route('/'),
            'create' => CreateHospital::route('/create'),
            'edit' => EditHospital::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
