<?php

namespace App\Filament\Resources\Articles\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;

class ArticlesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul_Artikel')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('status')
                    ->label('Status_Artikel')
                    ->badge()
                    ->color(fn (string $state) => $state === 'published' ? 'success' : 'warning'),
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
                TextColumn::make('published_at')
                    ->label('Terbit')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
                SelectFilter::make('status')
                    ->options(['draft' => 'Draft', 'published' => 'Published']),
                TrashedFilter::make(),
            ])
            ->headerActions([ 
                CreateAction::make() 
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
                RestoreAction::make(),
                ForceDeleteAction::make(),
            ]);
    }
}
