<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul_Page')
                    ->required()
                    ->live(onBlur: true),
                TextInput::make('slug')
                    ->label('Slug_Page')
                    ->required()
                    ->rules(['alpha_dash'])
                    ->unique(ignoreRecord: true),
                RichEditor::make('content')
                    ->label('Konten_Page')
                    ->columnSpanFull(),
                FileUpload::make('featured_image')
                    ->label('Gambar_Utama')
                    ->image(),
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
                Toggle::make('is_published')
                    ->label('Status_Publikasi')
                    ->formatStateUsing(fn ($state) => $state ? 'true' : 'false')
                    ->required(),
                DateTimePicker::make('published_at')
                    ->label('Terbit')
                    ->native(false)
                    ->seconds(false),
                TextInput::make('created_by')
                    ->numeric(),
                TextInput::make('updated_by')
                    ->numeric(),
            ]);
    }
}
