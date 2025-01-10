@props([
    'title' => null,
    'dir' => 'ltr'
])

<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="{{ $dir }}"
    class="filament-fabricator"
>
    <head>
        {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::head.start') }}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getMeta() as $tag)
            {{ $tag }}
        @endforeach

        @if ($favicon = \Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getFavicon())
            <link rel="icon" href="{{ $favicon }}">
        @endif

        <title>{{ $title ? "{$title} - " : null }} {{ config('app.name') }}</title>

        <style>
            [x-cloak=""], [x-cloak="x-cloak"], [x-cloak="1"] { display: none !important; }
        </style>
       <!--  Incluimos las hojas de estilos necesarias manualmenteo
            si usamos mix : <link rel="stylesheet" href="llave-llave mix('css/app.css') llave-llave ">
       -->
            <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/dist/tippy.css" />
             @Vite('resources/css/app.css')
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!--  Incluimos las hojas de estilos necesarias si están definidas en el boot del provider -->
        @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getStyles() as $name => $path)
            @if (\Illuminate\Support\Str::of($path)->startsWith('<'))
                {!! $path !!}
            @else
                <link rel="stylesheet" href="{{ $path }}" />
            @endif
        @endforeach

        {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::head.end') }}
    </head>
    <body >
        {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::body.start') }}
                {{ $slot }}
        {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::scripts.start') }}
        <!--  Incluimos las scripts necesarias manualmenteo
            Si usamos mix : <script defer src="llaves mix('js/app.js') llaves"></script>
            o         @ Vite('resources/css/app.js')
        -->
            <script defer src="{{ 'https://unpkg.com/browse/tippy.js@6.3.7/dist/tippy.esm.js' }}"></script>
            <script defer src="{{ asset('js/app.js') }}"></script>
        <!--  Incluimos las scripts necesarias si están definidas en el boot del provider -->
        @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getScripts() as $name => $path)
            @if (\Illuminate\Support\Str::of($path)->startsWith('<'))
                {!! $path !!}
            @else
                <script defer src="{{ $path }}"></script>
            @endif
        @endforeach

        @stack('scripts')

        {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::scripts.end') }}

        {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::body.end') }}
    </body>
</html>
