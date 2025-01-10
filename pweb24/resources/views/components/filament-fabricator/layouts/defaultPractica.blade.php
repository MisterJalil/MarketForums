@props(['page'])

<x-filament-fabricator.baseOriginal :title="$page->title">
    <div class="relative">
        <div style="position: absolute ; top: 0; left: 0; right: 0; bottom: 0;
     background-image: url('/storage/logo_ulpgcl_negativa_2t_azul.svg'); background-size: cover;
      background-position: center; background-attachment: fixed;opacity: 0.15; z-index: -1;"></div>
        <div class=" flex flex-col w-full h-full" style=" z-index: 1;">{{-- Header Here --}}
        <x-filament-fabricator.headerPractica />

        <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
                {{-- Footer Here --}}
        <x-filament-fabricator.footerPractica />
        </div>
    </div>
</x-filament-fabricator.baseOriginal>



