<?php

namespace App\Filament\Resources\MealsResource\Pages;

use App\Filament\Resources\MealsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMeals extends CreateRecord
{
    protected static string $resource = MealsResource::class;
}
