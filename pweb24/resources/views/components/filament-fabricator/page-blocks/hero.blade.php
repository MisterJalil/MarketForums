@props([
    'title',
    'description',
    'image',
    'button_text',
    'button_url',
])

<section class=" py-5">
    <div class="container mx-auto px-10 md:px-12 flex flex-col md:flex-row items-center border border-gray-200">
        <!-- Imagen -->
        @if ($image ?? null)
             <div class="md:w-1/2 mb-8 md:mb-0">
                <img src="{{ $image }}"  alt="{{ $title }}" class="w-full h-full object-cover rounded-lg shadow-lg">
            </div>
        @endif

        <!-- Contenido -->
        <div class="md:w-1/2 md:pl-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4"> {{ $title }}</h2>
            <p class="text-gray-600 mb-6">
                {{ $description }}
            </p>
            @if ($button_url ?? null)
            <a href="{{ $button_url }}" class="inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg shadow-lg hover:bg-blue-700 transition duration-300">{{ $button_text }}</a>
                @endif
        </div>
    </div>
</section>
