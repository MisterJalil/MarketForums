@props(['page'])
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $page->title }}</title>

    <!-- Fonts -->

    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/dist/tippy.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" >
    @Vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

    <body>
        @if (View::exists('vendor/filament-simple-pages/headerSimpleCMS'))
            @include('vendor/filament-simple-pages/headerSimpleCMS')
          @else
            <p>No se encontró la plantilla headerSimpleCMS.</p>
        @endif
        <div class="p-4 prose max-w-none bg-gray-100">
                @if($page->image_url)
                    <img src="{{ Storage::url($page->image_url) }}" class="h-96 w-full align-center"/>
                @endif
            {!! $page->content !!}
                <script defer src="{{ 'https://unpkg.com/browse/tippy.js@6.3.7/dist/tippy.esm.js' }}"></script>
                <script defer src="{{ asset('js/app.js') }}"></script>
        </div>
        @if (View::exists('vendor/filament-simple-pages/footerSimpleCMS'))
            @include('vendor/filament-simple-pages/footerSimpleCMS')
        @else
            <p>No se encontró la plantilla headerSimpleCMS.</p>
        @endif
    </body>
</html>

