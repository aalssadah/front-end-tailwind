<section class="  h-72 py-16">

    <div class="flex flex-col items-center gap-5">

        <div class="">
            <h1 class="text-2xl font-semibold">
                خدماتنا
            </h1>
        </div>

        <div class="">
            <img src="/images/dot.svg" alt="" class="w-4 h-4">
        </div>

        <div class="">
            <p class=" text-xl font-medium  opacity-50">
                نتعامل مع كل مشروع بذات الشغف والحماس والاهتمام بالتفاصيل الذي يقودنا لتحقيق أهداف مشروعك بسهولة
            </p>
        </div>
    </div>

    <section class=" max-w-7xl mx-auto px-12 py-24">

    <div class="service-card grid grid-cols-2 gap-4 justify-center ">

        @for($i=0;$i<5;$i++)
        <div class="flex  gap-4 px-8 py-12 border  rounded-2xl shadow-lg bg-[#FAFAFA] hover:bg-[#00f5f538] duration-700 transition-all">
            <div class="flex flex-col justify-between gap-6">
                <div class="">
                    <h1 class="text-xl font-semibold">
                        برمجة المواقع الإلكترونية
                    </h1>
                </div>

                <div class="">

                    <p class="text-l font-medium opacity-60 mt-4">
                        نقدم خدمات برمجة وتطوير المواقع الإلكترونية بتصاميم مميزة وتجربة مستخدم متطورة، مع ضمان توافقها مع جميع الأجهزة وسهولة التصفح. سواء كنت بحاجة إلى موقع تعريفي، مدونة، أو منصة إلكترونية، فنحن نقدم لك الحلول المثالية.
                    </p>
                </div>


                <div class="">

                    <a href="#" type="submit" class=" px-3 py-1  rounded-full text-[#06C4BF] border border-[#06C4BF]">
                            عرض المزيد
                    </a>
                </div>
            </div>

            <div class=" w-full">
                <img src="/images/service.png">
            </div>

        </div>

        @endfor
        
        

    </div>
</section>

</section>
