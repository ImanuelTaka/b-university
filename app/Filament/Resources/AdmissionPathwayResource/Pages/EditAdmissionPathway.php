<?php

namespace App\Filament\Resources\AdmissionPathwayResource\Pages;

use App\Filament\Resources\AdmissionPathwayResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdmissionPathway extends EditRecord
{
    protected static string $resource = AdmissionPathwayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
