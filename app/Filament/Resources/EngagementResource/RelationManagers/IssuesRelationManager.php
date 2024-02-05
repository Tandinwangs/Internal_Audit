<?php

namespace App\Filament\Resources\EngagementResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;

class IssuesRelationManager extends RelationManager
{
    protected static string $relationship = 'issues';

    protected static ?string $recordTitleAttribute = 'engagement_id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('engagement_id')
                    ->required()
                    ->hidden(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\Textarea::make('remarks')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('risk_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('issue_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('title'),
            Tables\Columns\TextColumn::make('description'),
            Tables\Columns\TextColumn::make('remarks'),
            Tables\Columns\TextColumn::make('risk_type'),
            Tables\Columns\TextColumn::make('issue_type'),
            Tables\Columns\TextColumn::make('status')
            ->color(
                'primary'),
            // Tables\Columns\TextColumn::make('created_at')
            //     ->dateTime(),
            // Tables\Columns\TextColumn::make('updated_at')
            //     ->dateTime(),
        ])
            ->filters([
                SelectFilter::make('status')
                ->options([
                    "Pending" => 'Pending',
                    "Solved" => 'Solved',
                ])
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }   
    
    public static function getRelations(): array
    {
        return [
            // RelationManagers\IssuesRelationManager::class,
        ];
    }
    
}
