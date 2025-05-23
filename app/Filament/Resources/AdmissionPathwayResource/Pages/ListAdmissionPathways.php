<?php

namespace App\Filament\Resources\AdmissionPathwayResource\Pages;

use App\Filament\Resources\AdmissionPathwayResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdmissionPathways extends ListRecords
{
    protected static string $resource = AdmissionPathwayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
