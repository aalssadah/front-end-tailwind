<section class="wrapper">

    <div class="bg-white rounded-lg overflow-hidden text-gray-900">
        <img src="/images/card.webp" alt="">
        <div class="p-6">
            <div class="text-xs font-semibold text-gray-600 uppercase tracking-wide"> 3 beds &bull; 2 baths</div>
            <h4 class=" font-semibold text-xl leading-tight truncate">This is the card you asked for
                This is the card you asked for
            </h4>
            <div class="mt-1"> $1900
                <span class=" text-gray-600 text-sm">/ wk </span>
            </div>
            <div class="flex mt-4">
                @for ($i = 1; $i <= 5; $i++)
                    <x-star width="4" height="4" color="{{$i<=3?'text-teal-500':'text-gray-400'}}">
                    </x-star>
                @endfor
                <span class=" text-gray-500 text-sm ml-3"> 34 reviews </span>
            </div>

        </div>

    </div>

</section>
