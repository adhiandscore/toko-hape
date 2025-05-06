<?php

namespace App\Filament\Admin\Resources\PhonePhotoResource\Pages;

use App\Filament\Admin\Resources\PhonePhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPhonePhotos extends ListRecords
{
    protected static string $resource = PhonePhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
