<div class="sticky top-0 bg-white dark:bg-black">
    <div class="flex flex-row justify-between border-b-[1px] items-center px-[6vw] py-2">
        <div>
        <img src="https://images.pexels.com/photos/1858115/pexels-photo-1858115.jpeg" alt="logo" class="rounded-full w-[2vw] h-[2vw] ring-offset-2 ring">
        </div>

        <div class="flex flex-row gap-3">
            <button id="menuToggle" class="sm:hidden text-3xl text-black dark:text-white focus:outline-none">
             &#9776;
            </button>

            <!-- Menu List -->
            <ul id="menu" class="hidden sm:flex sm:flex-row sm:gap-6 text-black dark:text-white absolute sm:static top-full right-4 sm:right-auto bg-white dark:bg-gray-800 sm:bg-transparent sm:shadow-none shadow-lg rounded-md p-4 sm:p-0 z-50 flex-col">
                <li class="hover:text-[#e35f0e]">
                    <a href="{{ route('welcome') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 sm:hover:bg-transparent">View Menu</a>
                </li>
                <li class="hover:text-[#e35f0e]">
                    <a href="{{ route('reservation') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 sm:hover:bg-transparent">Reservation</a>
                </li>
                <li class="hover:text-[#e35f0e]">
                    <a href="{{ route('login') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 sm:hover:bg-transparent"><i class="fa fa-user-circle-o mr-1" aria-hidden="true"></i>Login</a>
                </li>
                <li class="hover:text-[#e35f0e]">
                    <a href="{{ route('register') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 sm:hover:bg-transparent">Register</a>
                </li>
            </ul>
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
        </div>
    </div>    
</div>
