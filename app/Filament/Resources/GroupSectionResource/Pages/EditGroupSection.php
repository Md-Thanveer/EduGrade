<?php

namespace App\Filament\Resources\GroupSectionResource\Pages;

use App\Filament\Resources\GroupSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGroupSection extends EditRecord
{
    protected static string $resource = GroupSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
