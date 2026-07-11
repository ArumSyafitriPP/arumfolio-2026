<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ServiceResource\Pages;
use App\Filament\Admin\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Portfolio Management';
    protected static ?string $navigationLabel = 'Service';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_customer')
                    ->required(),

                Forms\Components\TextInput::make('nama_barang')
                    ->required(),

                Forms\Components\Textarea::make('keluhan')
                    ->required(),

                 Forms\Components\Textarea::make('diagnosis'),

                Forms\Components\Select::make('status')
                    ->options([
                        'Antri' => 'Antri',
                        'Proses' => 'Proses',
                        'Selesai' => 'Selesai',
                        'Diambil' => 'Diambil',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_customer')
                    ->searchable(),

                Tables\Columns\TextColumn::make('nama_barang')
                    ->searchable(),

                Tables\Columns\TextColumn::make('keluhan')
                    ->limit(30),

                Tables\Columns\TextColumn::make('diagnosis')
                    ->limit(30),

                Tables\Columns\TextColumn::make('status')
                    ->colors([
                        'warning' => 'Antri',
                        'primary' => 'Proses',
                        'success' => 'Selesai',
                        'gray' => 'Diambil',
                    ]),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
