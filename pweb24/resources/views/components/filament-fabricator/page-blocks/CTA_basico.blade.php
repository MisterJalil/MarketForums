@aware([
'title',
'boton',
'url'
])
<div class="px-1 py-1 md:py-1 " >
    <div class=" mx-auto">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-5 mx-auto border-solid border-2 border-gray-300">
                <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                    <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-900">{{ $title }}</h1>
                    <a href="{{$url}}" class="flex-shrink-0 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg mt-10 sm:mt-0">
                        {{  $boton }}</a>
                </div>
            </div>
        </section>
    </div>
</div>

