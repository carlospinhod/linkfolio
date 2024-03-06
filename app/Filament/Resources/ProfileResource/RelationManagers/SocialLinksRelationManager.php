<?php

namespace App\Filament\Resources\ProfileResource\RelationManagers;

use App\Models\SocialLink;
use App\Models\SocialNetwork;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SocialLinksRelationManager extends RelationManager
{
    protected static string $relationship = 'socialLink';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('social_network_id')
                    ->label(__('Rede Social'))
                    ->options(SocialNetwork::all()->pluck('name', 'id'))
                    ->searchable(),
                Forms\Components\TextInput::make('url')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('order')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('Social Link')
            ->columns([
                Tables\Columns\TextColumn::make('social_networks.name'),
                Tables\Columns\TextColumn::make('url'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
