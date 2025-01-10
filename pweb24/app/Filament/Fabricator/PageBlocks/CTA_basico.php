<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Storage;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class CTA_basico extends PageBlock
{
    public static function getBlockSchema(): Block
    {

        return Block::make('CTA_basico')
            ->schema([
                TextInput::make('title'),
                Grid::make()
                    ->schema([
                        TextInput::make('boton'),
                        TextInput::make('url')
                    ]),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
