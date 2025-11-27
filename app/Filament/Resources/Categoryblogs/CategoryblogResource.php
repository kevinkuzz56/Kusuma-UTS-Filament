<?php

namespace App\Filament\Resources\Categoryblogs;

use App\Filament\Resources\Categoryblogs\Pages\CreateCategoryblog;
use App\Filament\Resources\Categoryblogs\Pages\EditCategoryblog;
use App\Filament\Resources\Categoryblogs\Pages\ListCategoryblogs;
use App\Filament\Resources\Categoryblogs\Pages\ViewCategoryblog;
use App\Filament\Resources\Categoryblogs\Schemas\CategoryblogForm;
use App\Filament\Resources\Categoryblogs\Schemas\CategoryblogInfolist;
use App\Filament\Resources\Categoryblogs\Tables\CategoryblogsTable;
use App\Models\Categoryblog;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryblogResource extends Resource
{
    protected static ?string $model = Categoryblog::class;
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    //protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $recordTitleAttribute = 'Categoryblog';
    protected static string|\UnitEnum|null $navigationGroup = 'Content';

    public static function form(Schema $schema): Schema
    {
        return CategoryblogForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CategoryblogInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CategoryblogsTable::configure($table);
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
            'index' => ListCategoryblogs::route('/'),
            'create' => CreateCategoryblog::route('/create'),
            'view' => ViewCategoryblog::route('/{record}'),
            'edit' => EditCategoryblog::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
        ->withTrashed();
    }
}
