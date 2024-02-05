<?php

namespace App\Filament\Resources\IssueResource\Pages;

use App\Filament\Resources\IssueResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIssues extends ListRecords
{
    protected static string $resource = IssueResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
