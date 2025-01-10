@aware([
'title',
'content',
'image',
'opacity',
'boton1',
'url1',
'boton2',
'url2',
])
<section class="text-gray-600 body-font" >
    <div class="container mx-auto px-5 py-5 flex  items-center justify-center flex-col relative border border-gray-200 " >
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: url('{{$image}}'); background-size: cover; background-attachment: fixed;background-position: center; opacity: {{$opacity}}; z-index: -1;"></div>
        <div class="prose  max-w-none  w-full" >
            {!! $content !!}
            <div class="flex justify-center">
               @if ($boton1) <a href="{{$url1}}" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                {{{ $boton1 }}}</a>@endif
                @if ($boton2) <a href="{{$url2}}" class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">
                {{ $boton2 }}</a> @endif
            </div>
        </div>
    </div>
</section>
