@aware([
'title',
'content',
'image',
'opacity',
'boton',
'url'
])
<section class="text-gray-600 body-font" style="position: relative;">
    <div class="container  mx-auto flex px-5 py-5 items-center justify-center flex-col relative border border-gray-200 p-4" >
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: url('{{$image}}'); background-size: cover; background-position: center; opacity: {{$opacity}}; z-index: -1;"></div>

        <div class="prose  max-w-none text-center lg:w-2/3 w-full" style="background-attachment: fixed; position: relative; z-index: 1;">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{ $title }}</h1>
            <p class="mb-8 leading-relaxed">{{ $content }}</p>
            <div class="flex justify-center">
                @if ($boton )
                    <div>
                        <a href="{{ $url }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                            {{ $boton }}
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
