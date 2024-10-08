<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    {{-- Hero --}}
    <div class="flex flex-col justify-center md:flex-row h-screen items-center px-4 md:px-12">
        <div class="text-center md:text-right">
            <h3>
                {{ $hero->title }}
            </h3>
            <h1 class="text-4xl md:text-6xl font-bold">
                {{ $hero->description }}
            </h1>
            <button class="mt-8 md:mt-16 md:mr-64 bg-amber-500 p-4 text-white rounded-md shadow-md hover:bg-amber-400">
                اكتب قصتك معنا
            </button>
        </div>

        <div class="w-full md:w-2/3 flex justify-center items-center mt-8 md:mt-0">
            <img class="hidden md:block max-w-full h-auto object-cover rounded-lg" src="{{ asset($hero->image_path) }}" alt="Logo" />
        </div>
    </div>

    <div class="py-10 bg-gray-50">
        {{-- Goals --}}
        <div class="px-4 md:px-12">
            <h2 class="text-2xl md:text-4xl">
                أهدافنا
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                @foreach($goals as $goal)
                    {{-- Goal --}}
                    <div class="flex items-center pt-8 md:pt-16">
                        <p class="text-5xl md:text-8xl ml-4">
                            {{ $goal['order'] }}
                        </p>
                        <p class="text-2xl md:text-4xl">
                            {{ $goal['title'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Leader --}}
        <div class="py-10 px-4 md:px-12">
            <h2 class="text-2xl md:text-4xl">
                رئيس بيت الخبرة
            </h2>
            <div class="mt-8 md:mt-12 flex flex-col items-center md:flex-row">
                <img class="w-2/3 md:w-1/3 ml-4 rounded-full shadow border" src="{{ asset($leader->image_path) }}" alt="" />
                <div class="mt-8 md:mt-24 text-center md:text-right">
                    <h3 class="font-bold text-4xl md:text-6xl">
                        {{ $leader->name }}
                    </h3>
                    <p class="text-xl md:text-2xl mt-4 md:mt-8">
                        {{ $leader->description }}
                    </p>
                </div>
            </div>
        </div>

        {{-- Experts --}}
        <div class="py-10 px-4 md:px-12">
            <h2 class="text-2xl md:text-4xl">
                خبراء ميادير
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 mt-8 md:mt-12">
                @foreach($experts as $expert)
                    <div class="flex flex-col items-center mt-8 md:mt-12">
                        <img class="w-2/3 rounded-full shadow border" src="{{ asset($expert['image_path'] )}}" alt="" />
                        <div class="text-center mt-8 md:mt-12">
                            <h3 class="font-bold text-2xl md:text-4xl">
                                {{ $expert['name'] }}
                            </h3>
                            <p class="text-lg md:text-2xl mt-4 md:mt-8">
                                {{ $expert['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Services --}}
        <div class="py-10 px-4 md:px-12">
            <h2 class="text-2xl md:text-4xl">
                خدماتنا
            </h2>
            <div class="mt-8 md:mt-12">
                @foreach($servicesCategories as $servicesCategory)
                    <div>
                        <p class="w-full md:w-1/4 border-b-4 text-xl md:text-2xl font-bold mt-8 md:mt-12">
                            {{ $servicesCategory['title'] }}
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-4 mt-4">
                            @foreach($servicesCategory['services'] as $service)
                                <div class="mt-4 md:mt-0">
                                    <img src="{{ asset($service['title']) }}" alt="" />
                                    <p>
                                        {{ $service['title'] }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

{{--    --}}{{-- Footer --}}
{{--    <div class="h-20">--}}
{{--        --}}
{{--    </div>--}}
</div>
