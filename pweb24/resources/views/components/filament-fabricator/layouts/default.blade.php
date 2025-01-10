@props(['page'])
<x-filament-fabricator.baseOriginal :title="$page->title">

    {{-- Header Here --}}
         <x-filament-fabricator.header />
    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
     {{-- Footer Here --}}
        <x-filament-fabricator.footer />

</x-filament-fabricator.baseOriginal>
