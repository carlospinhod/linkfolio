<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Filament\Resources\ProfileResource\RelationManagers;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('user_id')
                    ->default(auth()->user()->id),

                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('username')
                                    ->required()
                                    ->maxLength(30)
                                    ->unique(),

                                Forms\Components\Textarea::make('bio')
                                    ->maxLength(60)
                                    ->autosize(),

                            ])

                    ])
                    ->columnSpan(['lg' => 2]),

                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Avatar')
                            ->schema([
                                Forms\Components\FileUpload::make('profile_image')
                                    ->avatar(),
                            ]),
                    ])
                    ->columnSpan(['lg' => 1]),
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('SEO')
                            ->schema([
                                Forms\Components\FileUpload::make('seo_image'),
                                Forms\Components\TextInput::make('seo_title')
                                    ->required()
                                    ->maxLength(60),
                                Forms\Components\TextInput::make('seo_description')
                                    ->required()
                                    ->maxLength(160),

                                Forms\Components\TextInput::make('seo_keywords')
                                    ->required()
                                    ->maxLength(280),
                                Forms\Components\FileUpload::make('favicon')
                                    ->imageResizeTargetWidth('64')
                                    ->imageResizeTargetHeight('64'),
                            ])->collapsible(),
                    ])
                    ->columnSpan(['lg' => 3]),
            ])
            ->columns(3);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('username')->description(fn(Profile $record): string => $record->bio),
                Tables\Columns\ImageColumn::make('profile_image')
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
            RelationManagers\SocialLinksRelationManager::class,
            RelationManagers\LinksRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', Auth::user()->id);
    }
}
