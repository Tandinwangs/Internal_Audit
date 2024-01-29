<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EngagementResource\Pages;
use App\Filament\Resources\EngagementResource\RelationManagers;
use App\Models\Engagement;
use App\Models\DispatchNumber;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;

class EngagementResource extends Resource
{
    protected static ?string $model = Engagement::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('dispatch_number')
                ->label("Dispatch Number"),
                Forms\Components\TextInput::make('address')
                    ->maxLength(255),
                Forms\Components\TextInput::make('unit')
                    ->maxLength(255),
                Forms\Components\TextInput::make('verticles')
                    ->maxLength(255),
                Forms\Components\TextInput::make('letter')
                    ->maxLength(255),
                Forms\Components\TextInput::make('memo')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('pstart_date')->label('Period Coverage(start date)'),
                Forms\Components\DatePicker::make('pend_date')->label('Period Coverage(end date)'),
                Forms\Components\DatePicker::make('estart_date')->label('Engagement Coverage(start date)'),
                Forms\Components\DatePicker::make('eend_date')->label('Engagement Coverage(end date)'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('dispatch_number')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('address')->searchable(),
                Tables\Columns\TextColumn::make('unit'),
                Tables\Columns\TextColumn::make('verticles'),
                Tables\Columns\TextColumn::make('letter'),
                Tables\Columns\TextColumn::make('memo'),
                Tables\Columns\TextColumn::make('pstart_date')
                    ->date(),
                Tables\Columns\TextColumn::make('pend_date')
                    ->date(),
                Tables\Columns\TextColumn::make('estart_date')
                    ->date(),
                Tables\Columns\TextColumn::make('eend_date')
                    ->date(),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime(),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime(),
            ])
            ->filters([
               
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            RelationManagers\IssuesRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEngagements::route('/'),
            'create' => Pages\CreateEngagement::route('/create'),
            'edit' => Pages\EditEngagement::route('/{record}/edit'),
        ];
    }    
}
