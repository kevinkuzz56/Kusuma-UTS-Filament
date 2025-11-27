<?php

namespace App\Filament\Resources\Settingseos;

use App\Filament\Resources\Settingseos\Pages\CreateSettingseo;
use App\Filament\Resources\Settingseos\Pages\EditSettingseo;
use App\Filament\Resources\Settingseos\Pages\ListSettingseos;
use App\Filament\Resources\Settingseos\Schemas\SettingseoForm;
use App\Filament\Resources\Settingseos\Tables\SettingseosTable;
use App\Models\Settingseo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SettingseoResource extends Resource
{
    protected static ?string $model = Settingseo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Settingseo';

    public static function form(Schema $schema): Schema
    {
        return SettingseoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SettingseosTable::configure($table);
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
            'index' => ListSettingseos::route('/'),
            'create' => CreateSettingseo::route('/create'),
            'edit' => EditSettingseo::route('/{record}/edit'),
        ];
    }
}
