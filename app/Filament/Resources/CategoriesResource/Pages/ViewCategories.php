<?php

namespace App\Filament\Resources\CategoriesResource\Pages;

use App\Filament\Resources\CategoriesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCategories extends ViewRecord
{
    protected static string $resource = CategoriesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
