<?php

namespace App\Filament\Resources\Categoryblogs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CategoryblogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama_KategoriBlog')
                    ->required(),
                Textarea::make('description')
                    ->label('Deskripsi_KategoriBlog')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->label('Status_Aktif')
                    ->formatStateUsing(fn ($state) => $state ? 'Aktif' : 'Nonaktif')
                    ->required(),
            ]);
    }
}
