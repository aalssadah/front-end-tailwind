<div class=" w-full bg-slate-50 sm:hidden" x-data="{ isOpen: false }">
    <header class=" w-full h-12 flex justify-between  items-center px-6">
        <div class="logo">
            <img src="/images/logo.png" alt="" class=" w-36">
        </div>
        <div class="">
            <button type="button" @click="isOpen = !isOpen">

                <svg xmlns="http://www.w3.org/2000/svg" class=" fill-current text-gray-400 hover:text-gray-700 w-6 h-6"
                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->

                    <path x-show="isOpen"
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />

                    <path x-show="!isOpen"
                        d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
                </svg>
            </button>
        </div>
    </header>

    <div class="px-3 pt-3 pb-4" x-show="isOpen">
        <a href="#" class=" p-2  px-3 block hover:bg-gray-200 rounded">List Of Servives</a>
        <a href="#" class=" p-2  px-3 block hover:bg-gray-200 rounded">Programming</a>
        <a href="#" class=" p-2  px-3 block hover:bg-gray-200 rounded">Designing</a>
        <a href="#" class=" p-2  px-3 block hover:bg-gray-200 rounded">Marketing</a>
      
    </div>
</div>


{{-- app --}}

<div class=" w-full bg-slate-50 hidden sm:block relative">
    <header class=" w-full h-12 flex justify-between  items-center px-6">
        <div class="logo">
            <img src="/images/logo.png" alt="" class=" w-36">
        </div>


        <div class="px-3 pt-3 pb-4 flex tracking-tighter items-center relative z-10">
            <a href="#" class=" p-2  px-3  hover:bg-gray-200 rounded">List Of Servives</a>
            <a href="#" class=" p-2  px-3  hover:bg-gray-200 rounded">Programming</a>
            <a href="#" class=" p-2  px-3  hover:bg-gray-200 rounded">Designing</a>
            <a href="#" class=" p-2  px-3  hover:bg-gray-200 rounded">Marketing</a>
            <div class="  p-2  px-3">

                <div class=" h-8 w-8 rounded-full overflow-hidden">
                    <img src="/images/profile.webp" alt="profile" class="w-full">
                </div>
            
                <div class=" bg-white w-48 py-2 mt-2 shadow-xl rounded-lg absolute right-0">
                    <a href="#" class=" block px-4 py-2  text-gray-800 hover:bg-indigo-500 hover:text-white">Dashboard</a>
                    <a href="#" class=" block px-4 py-2  text-gray-800 hover:bg-indigo-500 hover:text-white">Settings</a>
                    <a href="#" class=" block px-4 py-2  text-gray-800 hover:bg-indigo-500 hover:text-white">Log out</a>
                </div>
            
            </div>
            
        </div>
</div>
</header>
