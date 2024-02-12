<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SermonsResource\Pages;
use App\Filament\Resources\SermonsResource\RelationManagers;
use App\Models\Sermons;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SermonsResource extends Resource
{
    protected static ?string $model = Sermons::class;

    // heroicon-o-rectangle-stack
    protected static ?string $navigationIcon = 'heroicon-o-signal';

    protected static ?string $navigationLabel = 'Sermons';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([

                        Section::make()

                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->unique(),
                                MarkdownEditor::make('description')
                                    ->required(),
                            ])

                    ]),

                Group::make()
                    ->schema([

                        Section::make('Sermon type')

                            ->schema([
                                Select::make('sermon_type')
                                    ->options([
                                        'audio' => 'audio',
                                    ])->required(),
                                FileUpload::make('file_url')->required()->label('Sermon audio'),
                            ])->collapsible(),

                        Section::make('Status')

                            ->schema([
                                Toggle::make('is_visible'),
                                DatePicker::make('published_at')->required()
                            ])

                    ]),




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('description'),
                TextColumn::make('sermon_type'),
                IconColumn::make('is_visible')->boolean(),
                TextColumn::make('published_at'),
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListSermons::route('/'),
            'create' => Pages\CreateSermons::route('/create'),
            'edit' => Pages\EditSermons::route('/{record}/edit'),
        ];
    }
}
