<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    {{-- Hero --}}
    <div class="flex h-screen w-screen items-center">
        <div class="w-full pr-8">
            <h3 class="">
                ميادير للتنمية والابتكار
            </h3>
            <h1 class="text-6xl font-bold">
                تصميم الدراسات والمبادرات بإطار
                منهجي وأساليب مبتكرة
            </h1>
        </div>
        <div class="w-2/3 flex justify-center items-center">
            <img class="max-w-full h-auto object-cover rounded-lg shadow-lg" src="images/logo.jpg" alt="Logo" />
        </div>
    </div>

    {{-- Goals --}}
    <div class="py-10">
        <h2 class="text-4xl ">
            أهدافنا
        </h2>
        <div class="flex justify-center items-center">
            <div class="p-4">
                @for($i = 0; $i < 3; $i++)
                    {{-- Goal --}}
                    <div class="flex items-center pt-16 ">
                        <p class="text-8xl ml-4">
                            {{ $i + 1 }}
                        </p>
                        <p class="text-4xl">
                            إعداد الدراسات العلمية، والمقاييس التربوية، والنفسية، وتحكيمها
                        </p>
                    </div>
                @endfor
            </div>
            <div class="p-4">
                @for($i = 3; $i < 5; $i++)
                    {{-- Goal --}}
                    <div class="flex items-center pt-16 ">
                        <p class="text-8xl ml-4">
                            {{ $i + 1 }}
                        </p>
                        <p class="text-4xl">
                            إعداد الدراسات العلمية، والمقاييس التربوية، والنفسية، وتحكيمها
                        </p>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    {{-- Leader --}}
    <div class="py-10">
        <h2 class="text-4xl ">
            رئيس بيت الخبرة
        </h2>
        <div class="mt-12 flex">
            <img class="w-1/3" src="images/leader.png"  alt=""/>
            <div class="mt-24">
                <h3 class="font-bold text-6xl">د. خالد المنصوري </h3>
                <p class="text-2xl mt-8">
                    بين التعليم والتطوير ومن حجرة الدراسة إلى ساحات المجتمع تتحرك قدماي وتتنقل أفكاري وتنمو مشاريعي نحو استدامة مجتمعية ترتقي بحياتنا في الحاضر وتحقق لنا التمكين في المستقبل إن على ظاهر الأرض أو في باطنها 
                </p>
            </div>
        </div>

    </div>

    {{-- Experts --}}
    <div class="py-10">
        <h2 class="text-4xl ">
            خبراء ميادير
        </h2>
        <div class="grid grid-cols-4 mt-12">
            <div class="flex flex-col items-center mt-12 ">
                <img class="w-2/3" src="images/leader.png"  alt=""/>
                <div class="text-center mt-12">
                    <h3 class="font-bold text-4xl">د. خالد المنصوري </h3>
                    <p class="text-2xl mt-8">
                       تقي بحياتنا في الحاضر وتحقق لنا التمكين في المستقبل إن على ظاهر الأرض أو في باطنها 
                    </p>
                </div>
            </div>

            <div class="flex flex-col items-center mt-12 ">
                <img class="w-2/3" src="images/leader.png"  alt=""/>
                <div class="text-center mt-12">
                    <h3 class="font-bold text-4xl">د. خالد المنصوري </h3>
                    <p class="text-2xl mt-8">
                        بين التعليم والتطوير ومن حجرة الدراسة إلى ساحات المجتمع تتحرك قدماي وتتنقل أفكاري وتنمو مشاريعي نحو استدامة مجت
                    </p>
                </div>
            </div>

            <div class="flex flex-col items-center mt-12 ">
                <img class="w-2/3" src="images/leader.png"  alt=""/>
                <div class="text-center mt-12">
                    <h3 class="font-bold text-4xl">د. خالد المنصوري </h3>
                    <p class="text-2xl mt-8">
                        بين التعليم والتطوير ومن حجرة الدراسة إلى ساحات العلى ظاهر الأرض أو في باطنها 
                    </p>
                </div>
            </div>

            <div class="flex flex-col items-center mt-12 ">
                <img class="w-2/3" src="images/leader.png"  alt=""/>
                <div class="text-center mt-12">
                    <h3 class="font-bold text-4xl">د. خالد المنصوري </h3>
                    <p class="text-2xl mt-8">
                        بين التعليم  التمكين في المستقبل إن على ظاهر الأرض أو في باطنها 
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Experts --}}
    <div class="py-10">
        <h2 class="text-4xl ">
            خدماتنا
        </h2>
        <div class="mt-12 ">
            <div>
                <p class="w-1/4 border-b-4 text-2xl font-bold"> إعداد وتصميم</p>
                <div class="grid grid-cols-4 mt-4">
                   <div class="">
                       <img src="images/service.png" alt="" />
                       <p>
                           الدراسات العلمية
                       </p>
                   </div>
                    <div>
                        <img src="images/service.png" alt="" />
                        <p>
                            الدراسات العلمية
                        </p>
                    </div>
                    <div>
                        <img src="images/service.png" alt="" />
                        <p>
                            الدراسات العلمية
                        </p>
                    </div>
                    <div>
                        <img src="images/service.png" alt="" />
                        <p>
                            الدراسات العلمية
                        </p>
                    </div>
               </div>
            </div>
        </div>
    </div>


</div>
