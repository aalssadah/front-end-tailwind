<section class="bg-cover bg-center py-24  relative"
    style="background-image: url('{{ asset('images/firstchoice.png') }}');">

    {{-- <div class=" max-w-6xl mx-auto "> --}}
    <div class=" absolute inset-0 backdrop-blur-sm" style="background-color: rgba(13, 36, 73, 0.6);"></div>
    <div class=" flex flex-col gap-16 text-center" style="    transform: translateZ(0px);opacity: 1">

        <div class=" texts flex flex-col gap-2">
            <div class="font-semibold text-xl ">
                <h1 class=" text-white">مايجعلنا خيارك
                    <span class=" text-teal-300 ">الأول</span>
                </h1>
            </div>

            <div class=" mx-auto">
                <img src="/images/dot.svg" class=" " alt="">
            </div>

            <div class="px-8 md:px-0">
                <p class=" font-medium text-l text-white">
                    نحن نقدم حلولاً إلكترونية مبتكرة تتكامل بين التسويق الفعّال وبرمجة المواقع والتطبيقات بأعلى جودة
                    واهتمام بالتفاصيل
                </p>
            </div>

        </div>

        <div class="boxes max-w-6xl mx-auto px-8">
            <div class="flex md:flex-row flex-col md:gap-3 gap-10">
                @for ($i = 0; $i < 3; $i++)
                    <div class=" border  border-white/30  bg-white/10 rounded-xl  pb-8">
                        <div class="flex flex-col gap-4 items-center">
                            <div class=" border-2 border-white/60 p-3 rounded-md rotate-45 -mt-6 bg-[#06c4bf1a]">
                                <img src="/images/star.svg" alt="" class="-rotate-45">
                            </div>
                            <div class="">
                                <h1 class="text-white text-xl">سرعة التنفيذ</h1>
                            </div>
                            <div class=" text-white text-base">
                                جدول زمني سريع للمشاريع , بخطة تنفيذية وتنظيم دقيق للحصول على المخرجات بالجودة والسرعة
                                المنشود
                            </div>
                        </div>
                    </div>
                @endfor


            </div>
        </div>

    </div>

    {{-- </div> --}}
</section>
