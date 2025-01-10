<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Storage;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Hero_mod1 extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('hero_mod1')
               ->schema([
                   TextInput::make('title'),
                   TextInput::make('content'),
                   FileUpload::make('image')
                       ->label('Imagen del fondo')
                       ->image()
                       ->imageEditor()
                       ->downloadable(),

                   TextInput::make('opacity')
                       ->label('Opacidad de la imagen del fondo')
                       ->numeric()
                       ->minValue(0)
                       ->step(0.1)
                       ->maxValue(1),
                   Grid::make()
                       ->schema([
                           TextInput::make('boton'),
                           TextInput::make('url')
                       ]),
               ]);
    }

    public static function mutateData(array $data): array
    {
        if (filled($data['image'])) {
        $data['image'] = Storage::url($data['image']);
    }
        return $data;
    }
}
