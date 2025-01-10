<?php

namespace App\Filament\Fabricator\PageBlocks;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Support\Facades\Storage;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Hero_mod2 extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('hero_mod2')
            ->schema([

                TinyEditor::make('content')
                    ->toolbarMode('sliding')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsVisibility('public')
                    ->fileAttachmentsDirectory('uploads')
                    ->profile('full')
                    ->ltr() // Set RTL or use ->direction('auto|rtl|ltr')
                    ->resize('both')
                    ->columnSpan('full'),
                FileUpload::make('image')
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
                        TextInput::make('boton1')
                        ->label('Botón destacado'),
                        TextInput::make('url1')
                            ->label('Url del Botón destacado'),
                ]),
                Grid::make()
                    ->schema([
                        TextInput::make('boton2')
                            ->label('Botón claro'),
                        TextInput::make('url2')
                            ->label('Url del Botón claro'),
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
