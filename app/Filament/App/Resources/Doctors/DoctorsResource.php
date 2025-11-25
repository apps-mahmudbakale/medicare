<?php

namespace App\Filament\App\Resources\Doctors;

use App\Filament\App\Resources\Doctors\Pages\CreateDoctors;
use App\Filament\App\Resources\Doctors\Pages\EditDoctors;
use App\Filament\App\Resources\Doctors\Pages\ListDoctors;
use App\Filament\App\Resources\Doctors\Pages\ViewDoctors;
use App\Filament\App\Resources\Doctors\Schemas\DoctorsForm;
use App\Filament\App\Resources\Doctors\Schemas\DoctorsInfolist;
use App\Filament\App\Resources\Doctors\Tables\DoctorsTable;
use App\Models\Doctors;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DoctorsResource extends Resource
{
    protected static ?string $model = Doctors::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Doctor';

    public static function form(Schema $schema): Schema
    {
        return DoctorsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DoctorsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DoctorsTable::configure($table);
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
            'index' => ListDoctors::route('/'),
            'create' => CreateDoctors::route('/create'),
            'view' => ViewDoctors::route('/{record}'),
            'edit' => EditDoctors::route('/{record}/edit'),
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
