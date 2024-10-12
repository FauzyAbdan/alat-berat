<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MerekAlatBeratResource\Pages;
use App\Filament\Resources\MerekAlatBeratResource\RelationManagers;
use App\Models\MerekAlatBerat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MerekAlatBeratResource extends Resource
{
    protected static ?string $model = MerekAlatBerat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // Ubah label menu dan title resource
    protected static ?string $label = 'Merek Alat Berat'; // Label menu
    protected static ?string $pluralLabel = 'Merek Alat Berat'; // Label jamak
    protected static ?string $title = 'Merek Alat Berat'; // Title resource

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMerekAlatBerats::route('/'),
            'create' => Pages\CreateMerekAlatBerat::route('/create'),
            'edit' => Pages\EditMerekAlatBerat::route('/{record}/edit'),
        ];
    }
}
