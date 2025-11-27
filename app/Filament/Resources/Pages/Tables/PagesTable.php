<?php

namespace App\Filament\Resources\Pages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul_Page')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('slug')
                    ->label('Slug_Page')
                    ->toggleable(isToggledHiddenByDefault: true),
                ImageColumn::make('featured_image')
                    ->label('Gambar_Utama')                    
                    ->square()
                    ->size(60),
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
                IconColumn::make('is_published')
                    ->label('Status_Publikasi')
                    ->boolean(),
                TextColumn::make('published_at')
                    ->label('Terbit')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('createdBy.name')
                    ->label('Created By')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('updatedBy.name')
                    ->label('Updated By')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
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
