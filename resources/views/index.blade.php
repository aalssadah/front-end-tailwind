<x-app-layout>

    <x-home.hero></x-home.hero>

    <x-home.service></x-home.service>

    <x-home.first-choice></x-home.first-choice>

    <x-app></x-app>

    <section class="stats bg-teal-100">

        <div class=" max-w-4xl mx-auto flex flex-col md:flex-row px-8  py-24 justify-between ">

            @for ($i = 0; $i < 3; $i++)
                <div class="flex flex-col gap-3 text-center items-center">
                    <div class=" w-16 h-16 bg-white rounded-2xl rotate-45 flex  justify-center items-center ">
                        <h1 class="  text-teal-300 font-semibold text-2xl  -rotate-45">250</h1>
                    </div>
                    <div class="">
                        <h1 class=" text-2xl font-semibold">عميل</h1>
                    </div>
                    <div class="">
                        <p class=" font-medium opacity-30 ">يثقون بخدماتنا</p>
                    </div>
                    <div class=""></div>
                </div>
            @endfor

        </div>

    </section>


    <x-home.contact-us></x-home.contact-us>
</x-app-layout>
