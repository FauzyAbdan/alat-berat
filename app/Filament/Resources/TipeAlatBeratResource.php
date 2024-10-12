<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TipeAlatBeratResource\Pages;
use App\Filament\Resources\TipeAlatBeratResource\RelationManagers;
use App\Models\TipeAlatBerat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TipeAlatBeratResource extends Resource
{
    protected static ?string $model = TipeAlatBerat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // Ubah label menu dan title resource
    protected static ?string $label = 'Tipe Alat Berat'; // Label menu
    protected static ?string $pluralLabel = 'Tipe Alat Berat'; // Label jamak
    protected static ?string $title = 'Tipe Alat Berat'; // Title resource

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('kategori_alat_berat_id')
                    ->relationship('kategoriAlatBerat', 'name')
                    ->required(),
                Forms\Components\Select::make('merek_alat_berat_id')
                    ->relationship('merekAlatBerat', 'name')
                    ->required(),
                            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategoriAlatBerat.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('merekAlatBerat.name')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListTipeAlatBerats::route('/'),
            'create' => Pages\CreateTipeAlatBerat::route('/create'),
            'edit' => Pages\EditTipeAlatBerat::route('/{record}/edit'),
        ];
    }
}
