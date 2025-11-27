<?php

namespace App\Filament\Resources\Settingseos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SettingseoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('meta_title')
                    ->label('Judul_SEO')
                    ->required()
                    ->maxLength(150),
                TextInput::make('meta_description')
                    ->label('Deskripsi_SEO')
                    ->required()
                    ->maxLength(255),
                TextInput::make('meta_keywords')
                    ->label('Kata_Kunci_SEO')
                    ->required()
                    ->maxLength(255),
                TextInput::make('robots')
                    ->label('Meta_Robots_SEO')
                    ->required()
                    ->placeholder('index, follow')
                    ->helperText('Masukkan meta robots, misal: index, follow atau noindex, nofollow'),
            ]);
    }
}
