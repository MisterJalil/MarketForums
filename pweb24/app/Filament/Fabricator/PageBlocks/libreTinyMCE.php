<?php

namespace App\Filament\Fabricator\PageBlocks;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class libreTinyMCE extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('libre-tiny-m-c-e')
            ->schema([
                FileUpload::make('image_url')
                    ->label('Imagen de fondo')
                    ->helperText('Add image for this page or leave it empty')
                    ->disk('public')
                    ->image()
                    ->imageEditor()
                    ->columnStart(1)
                    ->directory('static_pages')
                    ->visibility('public')
                    ->columnSpanFull(),
                ColorPicker::make('colorFondo')
                  ->label('Color de fondo'),
                TinyEditor::make('content')
                    ->toolbarMode('sliding')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsVisibility('public')
                    ->fileAttachmentsDirectory('uploads')
                    ->profile('full')
                    ->ltr() // Set RTL or use ->direction('auto|rtl|ltr')
                    ->resize('both')
                    ->columnSpan('full'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
