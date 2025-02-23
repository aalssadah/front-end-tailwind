<x-app-layout>

    <div class="flex bg-gray-300">

        <div class=" py-12 px-8 max-w-md mx-auto sm:max-w-xl lg:max-w-full lg:w-1/2 lg:py-24 lg:px-12">
            <div class=" xl:max-w-lg xl:ml-auto">


                <img src="/images/logo.png " alt="image" class=" h-24" />

                <img src="/images/bg.jpg" alt="background"
                    class=" mt-6 rounded-xl shadow-xl  sm:mt-8 sm:h-64 sm:w-full object-cover object-center lg:hidden" />

                <h1 class=" text-2xl sm:text-4xl font-medium text-gray-700 leading-tight mt-4 sm:mt-8 xl:text-4xl">
                    You can work from anywhere.
                    <br class=" hidden lg:inline"><span class=" text-green-700 font-bold">Take advantage of it.</span>
                </h1>

                <p class=" text-gray-600 mt-2 sm:text-xl sm:mt-4">
                    Workcation helps you find work-friendly rentals in beautiful locations so you can enjoy some nice
                    weather even when you're not on vacation.
                </p>

                <div class="mt-4 ">
                    <a href="#" class="btn btn-green sm:text-base  focus:outline-none active:bg-red-500 ">
                        Book your escape
                    </a>
                    <a href="#" class="btn btn-gray sm:text-base  focus:outline-none ">
                        Read More
                    </a>
                </div>
            </div>
        </div>

        <div class="hidden lg:block lg:w-1/2 lg:relative">
            <img src="/images/bg.jpg" alt="background"
                class=" absolute inset-0 w-full h-full object-cover object-center" />
        </div>
    </div>

    <section class="wrapper">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-1  ">
            <div class="bg-white shadow-lg rounded-lg p-6 ">Country</div>
            <div class="bg-white shadow-lg rounded-lg p-6 ">Location</div>
            <div class="bg-white shadow-lg rounded-lg p-6 ">Position</div>
            <div class="bg-white shadow-lg rounded-lg p-6 ">Rest</div>
        </div>
    </section>

    <section class="wrapper">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-2">

            @foreach (range(1, 3) as $i)
                <x-destinationCard></x-destinationCard>
            @endforeach
        </div>
    </section>

    <section class="wrapper">
        @foreach (range(1, 3) as $i)
            <x-horizontal> </x-horizontal>
        @endforeach
    </section>


    {{-- Application --}}

    <x-app></x-app>

    {{-- Adam card  --}}

    <x-card></x-card>
</x-app-layout>
