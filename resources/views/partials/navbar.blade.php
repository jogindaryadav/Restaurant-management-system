<div class="sticky top-0 bg-white dark:bg-black">
    <div class="flex flex-row justify-between border-b-[1px] items-center px-[6vw] py-2">
    <div>
        <img src="https://images.pexels.com/photos/1858115/pexels-photo-1858115.jpeg" alt="logo" class="rounded-full w-[2vw] h-[2vw] ring-offset-2 ring ">
    </div>
    <ul class="flex flex-row gap-[3vw] text-md text-black dark:text-white font-sans">
        <li class="hover:text-[#e35f0e]">
            <a href="{{ route('welcome')}}" class="hover:text-[#e35f0e]">View Menu

            </a>
        </li>
        <li class="hover:text-[#e35f0e]">
            <a href="{{ route('reservation') }}">Reservation</a>
        </li>
        <li class="hover:text-[#e35f0e]">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            <!-- <a href="">Login</a> -->
            <a href="{{ route('login') }}">Login</a>
        </li>
        <li class="hover:text-[#e35f0e]">
            <a href="{{ route('register') }}">Register
                
            </a>
        </li>
        <button id="darkToggle" class="border p-1 rounded-full">
            <svg id="sunIcon" class="w-6 h-6 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 3v1m0 16v1m8.66-13.66l-.71.71M4.05 19.95l-.71.71M21 12h-1M4 12H3m16.66 4.95l-.71-.71M4.05 4.05l-.71-.71M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
            </svg>
            <svg id="moonIcon" class="w-6 h-6 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/>
            </svg>
        </button>
    </ul>
    </div>
</div>
