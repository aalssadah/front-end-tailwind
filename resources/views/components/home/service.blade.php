<section class="   py-16 ">

    <div class="flex flex-col items-center gap-5">

        <div class="">
            <h1 class="text-2xl font-semibold">
                خدماتنا
            </h1>
        </div>

        <div class="">
            <img src="/images/dot.svg" alt="" class="w-4 h-4">
        </div>

        <div class="text-center">
            <p class=" text-xl font-medium  opacity-50">
                نتعامل مع كل مشروع بذات الشغف والحماس والاهتمام بالتفاصيل الذي يقودنا لتحقيق أهداف مشروعك بسهولة
            </p>
        </div>
    </div>

    {{-- web card --}}
    <section class="max-w-7xl mx-auto px-2 md:px-8 lg:px-12 py-24">

        <div class="service-card grid md:grid-cols-2 gap-4">
            @php
                $totalItems = 5; // Set dynamically from your database
            @endphp

            @for ($i = 0; $i < $totalItems; $i++)
                <div
                    class="flex gap-4 px-8 py-12 border rounded-2xl shadow-lg bg-[#FAFAFA] hover:bg-[#00f5f517] duration-700 transition-all
                        {{ $i == $totalItems - 1 && $totalItems % 2 != 0 ? 'md:col-span-2 mx-auto' : '' }}">

                    <div class="flex flex-col justify-between gap-6 w-3/4">
                        <div>
                            <h1 class="text-xl font-semibold">
                                برمجة المواقع الإلكترونية
                            </h1>
                        </div>

                        <div>
                            <p class="text-l font-medium opacity-60 mt-4">
                                نقدم خدمات برمجة وتطوير المواقع الإلكترونية بتصاميم مميزة وتجربة مستخدم متطورة
                            </p>
                        </div>

                        <div>
                            <a href="#" class="px-3 py-1 rounded-full text-[#06C4BF] border border-[#06C4BF]">
                                عرض المزيد
                            </a>
                        </div>
                    </div>

                    <div class="w-1/3">
                        <img src="/images/service.png" class="h-[150px]">
                    </div>

                </div>
            @endfor
        </div>

    </section>


</section>
