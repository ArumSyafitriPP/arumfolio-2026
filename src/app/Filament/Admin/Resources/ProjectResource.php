<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProjectResource\Pages;
use App\Filament\Admin\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Portfolio Management';
    protected static ?string $navigationLabel = 'Project';

    public static function form(Form $form): Form
    {
    return $form
        ->schema([

            Forms\Components\TextInput::make('title')
                ->required(),

            Forms\Components\TextInput::make('slug')
                ->required(),

            Forms\Components\TextInput::make('category'),

            Forms\Components\FileUpload::make('image')
                ->image()
                ->directory('projects')
                ->disk('public'),

            Forms\Components\Textarea::make('short_description'),

            Forms\Components\RichEditor::make('description')
                ->columnSpanFull(),

            Forms\Components\TagsInput::make('tech_stack'),

            Forms\Components\RichEditor::make('problem_analysis')
                ->columnSpanFull(),

            Forms\Components\TagsInput::make('features'),

            Forms\Components\RichEditor::make('architecture')
                ->columnSpanFull(),

            Forms\Components\FileUpload::make('diagram')
                ->image()
                ->directory('projects'),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('category'),
                Tables\Columns\TextColumn::make('tech_stack')->badge(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
