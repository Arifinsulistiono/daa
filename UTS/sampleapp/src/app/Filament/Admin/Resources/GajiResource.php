<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\GajiResource\Pages;
use App\Filament\Admin\Resources\GajiResource\RelationManagers;
use App\Models\Gaji;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GajiResource extends Resource
{
    protected static ?string $model = Gaji::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('guru_id')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('gaji_pokok')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tunjangan')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('potongan')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('gaji_bersih')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('tanggal_transfer')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('guru_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gaji_pokok')
                    ->numeric()
                    ->sortable()
                    ->formatStateUsing(fn (string $state): string => 'Rp' . number_format($state, 0, ',', '.')),
                Tables\Columns\TextColumn::make('tunjangan')
                    ->numeric()
                    ->sortable()
                    ->formatStateUsing(fn (string $state): string => 'Rp' . number_format($state, 0, ',', '.')),
                Tables\Columns\TextColumn::make('potongan')
                    ->numeric()
                    ->sortable()
                    ->formatStateUsing(fn (string $state): string => 'Rp' . number_format($state, 0, ',', '.')),
                Tables\Columns\TextColumn::make('gaji_bersih')
                    ->numeric()
                    ->sortable()
                    ->formatStateUsing(fn (string $state): string => 'Rp' . number_format($state, 0, ',', '.')),
                Tables\Columns\TextColumn::make('tanggal_transfer')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListGajis::route('/'),
            'create' => Pages\CreateGaji::route('/create'),
            'edit' => Pages\EditGaji::route('/{record}/edit'),
        ];
    }
}
