<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StadionResource\Pages;
use App\Filament\Resources\StadionResource\RelationManagers;
use App\Models\Stadion;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use App\Filament\Resources\StadionResource\RelationManagers\StadionFieldsRelationManager;

class StadionResource extends Resource
{
    protected static ?string $model = Stadion::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('TelegramBot')
                    ->schema([
                        TextInput::make('bot_token')
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                IconColumn::make('status')
                    ->boolean()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            StadionFieldsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStadions::route('/'),
            'create' => Pages\CreateStadion::route('/create'),
            'edit' => Pages\EditStadion::route('/{record}/edit'),
        ];
    }
}
