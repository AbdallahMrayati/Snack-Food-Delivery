<?php

namespace App\Filament\Resources\MealsResource\Pages;

use App\Filament\Resources\MealsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMeals extends EditRecord
{
    protected static string $resource = MealsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
