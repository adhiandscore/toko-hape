<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PhoneResource\Pages;
use App\Models\Phone;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PhoneResource extends Resource
{
    protected static ?string $model = Phone::class;

    protected static ?string $navigationIcon = 'heroicon-o-device-phone-mobile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([


                Fieldset::make('phone details')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Phone Name')
                            ->required()
                            ->placeholder('Enter phone name')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('price')
                            ->required()
                            ->placeholder('Enter phone price')
                            ->numeric()
                            ->prefix('IDR'),

                        Forms\Components\FileUpload::make('thumbnail')
                            ->image()
                            ->required()
                            ->uploadingMessage('Uploading image...'),
                    ]),

                Fieldset::make('informasi tambahan')
                    ->schema([
                        Forms\Components\TextInput::make('about')
                            ->label('Phone Detail')
                            ->required()
                            ->placeholder('Enter phone detail'),

                        Forms\Components\Select::make('is popular?')
                            ->options([
                                true => 'Popular',
                                False => 'not popular'
                            ])
                            ->required(),
                        Forms\Components\Select::make('brand_id')
                            ->relationship('brand', 'name')
                            ->searchable()
                            ->required()
                            ->preload(),
                        Forms\Components\Select::make('category_id')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->required()
                            ->preload(),

                        Forms\Components\TextInput::make('stock')
                            ->required()
                            ->numeric()
                            ->prefix('Qty'),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPhones::route('/'),
            'create' => Pages\CreatePhone::route('/create'),
            'edit' => Pages\EditPhone::route('/{record}/edit'),
        ];
    }
}
