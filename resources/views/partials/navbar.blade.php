<div class="flex flex-row justify-between border-b-[1px] items-center px-[6vw] py-2">
    <div>
        <img src="" alt="logo" class="rounded-full w-[4vw]">
    </div>
    <ul class="flex flex-row gap-[3vw] text-xl text-black dark:text-white font-sans">
        <li><a href="#view_menu" class="hover:text-[#e35f0e]">View Menu</a></li>
        <li><a href="#reservation" class="hover:text-[#e35f0e]">Reservation</a></li>
        <li class="hover:text-[#e35f0e]">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            <a href="">Login</a>
        </li>
        <li><a href="" class="hover:text-[#e35f0e]">Register</a></li>
        <button class="rounded-full border-[1px] border-black dark:border-white relative" id="darkMode">
            <img src="{{ asset('images/moon.svg') }}" id="icon-moon" class="block dark:hidden px-[5px] py-[6px] h-[2vw] w-[2vw]">
            <img src="{{ asset('images/sun.png') }}" id="icon-sun" class="hidden dark:block px-[5px] py-[6px] h-[2vw] w-[2vw]">
        </button>
    </ul>
</div>
