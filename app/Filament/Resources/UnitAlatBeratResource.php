<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\TipeAlatBerat;
use App\Models\UnitAlatBerat;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UnitAlatBeratResource\Pages;
use App\Filament\Resources\UnitAlatBeratResource\RelationManagers;

class UnitAlatBeratResource extends Resource
{
    protected static ?string $model = UnitAlatBerat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_body')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('kategori_alat_berat_id')
                    ->relationship('kategoriAlatBerat', 'name')
                    ->required()
                    ->reactive(),
                Forms\Components\Select::make('merek_alat_berat_id')
                    ->label('Merek Alat Berat')
                    ->relationship('merekAlatBerat', 'name')
                    ->required()
                    ->reactive(),
                Forms\Components\Select::make('tipe_alat_berat_id')
                    ->label('Tipe Alat Berat')
                    ->relationship('tipeAlatBerat', 'name')
                    ->required()
                    ->options(function (callable $get) {
                        $kategoriId = $get('kategori_alat_berat_id');
                        $merekId = $get('merek_alat_berat_id');

                        if ($kategoriId && $merekId) {
                            return TipeAlatBerat::where('kategori_alat_berat_id', $kategoriId)
                                ->where('merek_alat_berat_id', $merekId)
                                ->pluck('name', 'id');
                        }
                        return [];
                    })
                    ->reactive(),

                Forms\Components\FileUpload::make('featured_image')
                    ->image(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_body')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategoriAlatBerat.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('merekAlatBerat.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tipeAlatBerat.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('featured_image'),
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
            'index' => Pages\ListUnitAlatBerats::route('/'),
            'create' => Pages\CreateUnitAlatBerat::route('/create'),
            'edit' => Pages\EditUnitAlatBerat::route('/{record}/edit'),
        ];
    }
}
