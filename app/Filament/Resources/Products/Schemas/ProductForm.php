<?php

namespace App\Filament\Resources\Products\Schemas;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;


class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_barang')
                    ->label('Kode_Barang')
                    ->required()
                    ->maxLength(255),
                TextInput::make('nama_barang')
                    ->label('Nama_Barang')
                    ->required()
                    ->maxLength(255),
                TextInput::make('harga')
                    ->label('Harga_Barang')
                    ->numeric()
                    ->required()
                    ->default(0),
                Select::make('categori_id')
                    ->label('ID_Kategori')
                    ->relationship('category', 'nama_kategori')
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }
}

