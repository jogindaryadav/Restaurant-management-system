<div class="sticky top-0 bg-white dark:bg-black">
    <div class="flex flex-row justify-between border-b-[1px] items-center px-[4vw] sm:px-[6vw] py-1">
        <div>
        <img src="https://images.pexels.com/photos/1858115/pexels-photo-1858115.jpeg" alt="logo" class="rounded-full w-[6vw] h-[6vw] sm:w-[3vw] sm:h-[3vw] ring-offset-1 sm:ring-offset-2 ring">
        </div>

        <div class="flex flex-row gap-3 items-center">
            <button id="menuToggle" class="sm:hidden block text-3xl text-black dark:text-white focus:outline-none">
             &#9776;
            </button>

            <!-- Menu List -->
            <ul id="menu" class="hidden sm:flex sm:flex-row sm:gap- text-black dark:text-white absolute sm:static top-full right-4 sm:right-auto 00 sm:bg-transparent sm:shadow-none shadow-lg bg-gray-200 dark:bg-black">
                <li class="hover:text-[#e35f0e]">
                    <a href="{{ route('welcome') }}" class=" px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 sm:hover:bg-transparent">View Menu</a>
                </li>
                <li class="hover:text-[#e35f0e]">
                    <a href="{{ route('reservation') }}" class=" px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 sm:hover:bg-transparent">Reservation</a>
                </li>
                <li class="hover:text-[#e35f0e]">
                    <a href="{{ route('login') }}" class=" px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 sm:hover:bg-transparent"><i class="fa fa-user-circle-o mr-1" aria-hidden="true"></i>Login</a>
                </li>
                <li class="hover:text-[#e35f0e]">
                    <a href="{{ route('register') }}" class=" px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 sm:hover:bg-transparent">Register</a>
                </li>
            </ul>
            <button id="darkToggle" class="border p-1 rounded-full">
                <img id="sunIcon" src="{{ asset('images/sun.png') }}" alt="Sun" class="w-6 h-6 hidden">
                <img id="moonIcon" src="{{ asset('images/moon-6689.svg') }}" alt="Moon" class="w-6 h-6 hidden">
            </button>
        </div>
    </div>    
</div>
<script>
    const menuToggle = document.getElementById('menuToggle');
    const menu = document.getElementById('menu');

    menuToggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>