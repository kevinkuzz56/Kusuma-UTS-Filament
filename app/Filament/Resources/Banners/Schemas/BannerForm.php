<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul_Banner')
                    ->required(),
                TextInput::make('subtitle')
                    ->label('Subjudul_Banner')
                    ->required(),
                FileUpload::make('image_url')
                    ->label('URL_Gambar')
                    ->image()
                    ->required(),
                TextInput::make('link_url')
                    ->label('Link_URL')
                    ->url()
                    ->required(),
                TextInput::make('position')
                    ->label('Lokasi_Penempatan')
                    ->required()
                    ->default('top'),
                TextInput::make('order_index')
                    ->label('Urutan_Tampil')
                    ->numeric()
                    ->required(),
                Toggle::make('is_active')
                    ->label('Status_Aktif')
                    ->formatStateUsing(fn ($state) => $state ? 'Aktif' : 'Nonaktif')
                    ->required(),
                DateTimePicker::make('start_date')
                    ->label('Jadwal_Mulai_Tampil'),
                DateTimePicker::make('end_date')
                    ->label('Jadwal_Berakhir')
            ]);
    }
}
