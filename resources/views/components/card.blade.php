

    
    <div class="bg-white rounded-lg overflow-hidden text-gray-900 ">
        <div class=" relative">
            
            <!-- Overlay -->
            <div class="absolute inset-0  bg-imageOpacity "></div>
            <img src="/images/card.webp" alt="" class=" w-full object-cover object-center ">
        </div>
        <div class="p-6">
            <div class=" inline-flex items-baseline">
                <span class=" text-xs uppercase bg-teal-200 text-teal-800 px-2 inline-block  rounded-full">new</span>
                <div class=" ml-2 text-xs font-semibold text-gray-600 uppercase tracking-wide"> 3 beds &bull; 2 baths</div>
            </div>
            <h4 class=" font-semibold text-xl leading-tight truncate">Modern home in center city
            </h4>
            <div class="mt-1"> 
                <span class=" font-semibold">$1900</span>
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
    

