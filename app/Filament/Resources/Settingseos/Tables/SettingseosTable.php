<?php

namespace App\Filament\Resources\Settingseos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SettingseosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('meta_title')
                    ->label('Judul_SEO')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('meta_description')
                    ->label('Deskripsi_SEO')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('meta_keywords')
                    ->label('Kata_Kunci_SEO')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('robots')
                    ->label('Meta_Robots_SEO')
                    ->searchable()
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
