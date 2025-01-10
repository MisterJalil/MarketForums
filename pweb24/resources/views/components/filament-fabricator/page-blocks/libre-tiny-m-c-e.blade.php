@aware([
    'colorFondo',
    'image_url',
    'content',
])
<section class="bg-gray-100 px-5 py-1" >
    <div  class="px-2  py-2" @if ($colorFondo) style="background-color: {{$colorFondo}};" @endif>

        <div class="prose max-w-none">
                  {!! $content !!}
        </div>
    </div>

</section>
