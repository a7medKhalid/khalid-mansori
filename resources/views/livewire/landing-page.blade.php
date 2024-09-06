<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    {{-- Hero --}}
    <div class="flex h-screen items-center px-12">
        <div>
            <h3 class="">
                {{ $hero->title }}
            </h3>
            <h1 class="text-6xl font-bold">
                {{ $hero->description }}
            </h1>
            <button class="mt-16 mr-64 bg-amber-500 p-4 text-white rounded-md shadow-md hover:bg-amber-400">
                اكتب قصتك معنا
            </button>
        </div>

        <div class="w-2/3 flex justify-center items-center">
            <img class="max-w-full h-auto object-cover rounded-lg" src="{{ $hero->image_path }}" alt="Logo" />
        </div>
    </div>

    <div class="py-10 bg-gray-50">
        {{-- Goals --}}
        <div class="px-12">
            <h2 class="text-4xl ">
                أهدافنا
            </h2>
            <div class="grid grid-cols-2 items-center">
                @foreach($goals as $goal)
                    {{-- Goal --}}
                    <div class="flex items-center pt-16 ">
                        <p class="text-8xl ml-4">
                            {{ $goal['order'] }}
                        </p>
                        <p class="text-4xl">
                            {{ $goal['title'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Leader --}}
        <div class="py-10 px-12">
            <h2 class="text-4xl ">
                رئيس بيت الخبرة
            </h2>
            <div class="mt-12 flex">
                <img class="w-1/3 ml-4 rounded-full shadow border" src="{{ $leader->image_path }}"  alt=""/>
                <div class="mt-24">
                    <h3 class="font-bold text-6xl"> {{ $leader->name }} </h3>
                    <p class="text-2xl mt-8">
                        {{ $leader->description }}
                    </p>
                </div>
            </div>

        </div>

        {{-- Experts --}}
        <div class="py-10 px-12">
            <h2 class="text-4xl ">
                خبراء ميادير
            </h2>
            <div class="grid grid-cols-3 mt-12">
                @foreach($experts as $expert)
                    <div class="flex flex-col items-center mt-12 ">
                        <img class="w-2/3 rounded-full shadow border" src="{{ $expert['image_path'] }}"  alt=""/>
                        <div class="text-center mt-12">
                            <h3 class="font-bold text-4xl">
                                {{ $expert['name'] }}
                            </h3>
                            <p class="text-2xl mt-8">
                                {{ $expert['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Experts --}}
        <div class="py-10 px-12">
            <h2 class="text-4xl ">
                خدماتنا
            </h2>
            <div class="mt-12 ">
                @foreach($servicesCategories as $servicesCategory)
                    <div>
                        <p class="w-1/4 border-b-4 text-2xl font-bold mt-12">
                            {{ $servicesCategory['title'] }}
                        </p>
                        <div class="grid grid-cols-4 mt-4">
                            @foreach($servicesCategory['services'] as $service)
                                <div class="">
                                    <img src="images/service.png" alt="" />
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
    {{-- Footer --}}
    <div class="h-20">
        By abo da7em
    </div>

</div>
