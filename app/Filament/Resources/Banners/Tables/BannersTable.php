<?php

namespace App\Filament\Resources\Banners\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BannersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul_Banner')
                    ->searchable(),
                TextColumn::make('subtitle')
                    ->label('Subjudul_Banner')
                    ->searchable(),
                ImageColumn::make('image_url')
                    ->label('URL_Gambar')
                    ->searchable(),
                TextColumn::make('link_url')
                    ->label('Link_URL')
                    ->searchable(),
                TextColumn::make('position')
                    ->label('Lokasi_Penempatan')
                    ->searchable(),
                TextColumn::make('order_index')
                    ->label('Urutan_Tampil')
                    ->numeric()
                    ->sortable(),
                IconColumn::make('is_active')
                    ->label('Status_Aktif')
                    ->boolean(),
                TextColumn::make('start_date')
                    ->label('Jadwal_Mulai_Tampil')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('end_date')
                    ->label('Jadwal_Berakhir')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
