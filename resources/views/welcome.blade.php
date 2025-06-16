@extends('layouts.app')

@section('content')
<div class="bg-white dark:bg-black text-black">

    <!-- hero-section -->
    <div class="px-[7vw] py-12 border-b border-gray-200 dark:border-gray-800 bg-white dark:bg-black text-black dark:text-white">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-center">

    <!-- Image -->
    <div class="overflow-hidden rounded-2xl shadow-md">
      <img src="https://plus.unsplash.com/premium_photo-1661953124283-76d0a8436b87?w=600&auto=format&fit=crop&q=60" 
           alt="Restaurant Image" 
           class="h-full w-full object-cover transition-transform duration-300 hover:scale-105" />
    </div>

    <!-- Info Section -->
    <div class="md:col-span-2 flex flex-col justify-between gap-6">
      <div class="flex flex-col gap-1">
        <h2 class="text-3xl font-extrabold tracking-tight">Unique Kitchen</h2>
        <p class="text-sm text-green-500 font-medium">Open Now 
          <a href="#" class="text-sm text-gray-500 hover:text-[#e35f0e] underline ml-2">More info</a>
        </p>
        <p class="text-base text-gray-600 dark:text-gray-300">Bhairahawa, Rupandehi</p>
      </div>

      <!-- Rating -->
      <div class="flex items-center space-x-1 text-yellow-400">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
        <i class="fa fa-star-o"></i>
        <i class="fa fa-star-o"></i>
        <a href="#" class="text-sm text-[#e35f0e] underline ml-2">(2) Reviews</a>
      </div>

      <!-- Delivery Info -->
      <div class="mt-4 border border-gray-300 dark:border-gray-600 rounded-lg px-4 py-3 text-sm flex items-center justify-between max-w-sm">
        <span><i class="fa fa-clock-o mr-2"></i>Delivery in <strong>15 min</strong></span>
        <a href="#" class="text-[#e35f0e] underline hover:text-orange-600 transition">Change</a>
      </div>
    </div>

  </div>
</div>


    <!-- item list section -->
<div class="border-b border-gray-200 dark:border-gray-700 px-[7vw] py-6 bg-white dark:bg-black">
  <div class="flex items-center justify-between mb-4">
    <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Browse Categories</h2>
    <button class="text-sm text-[#e35f0e] font-medium hover:underline">View All</button>
  </div>

  <ul class="custom-scroll flex gap-6 overflow-x-auto whitespace-nowrap text-base font-medium text-gray-700 dark:text-gray-200 scrollbar-thin scrollbar-thumb-[#e35f0e]/70 scrollbar-track-transparent">
    <li>
      <a href="#" class="inline-block px-4 py-2 rounded-full bg-[#e35f0e]/10 text-[#e35f0e] hover:bg-[#e35f0e]/20 transition">All Categories</a>
    </li>
    <li><a href="#" class="inline-block px-4 py-2 rounded-full hover:bg-[#e35f0e]/20 transition">Appetizer</a></li>
    <li><a href="#" class="inline-block px-4 py-2 rounded-full hover:bg-[#e35f0e]/20 transition">Specials</a></li>
    <li><a href="#" class="inline-block px-4 py-2 rounded-full hover:bg-[#e35f0e]/20 transition">Salads</a></li>
    <li><a href="#" class="inline-block px-4 py-2 rounded-full hover:bg-[#e35f0e]/20 transition">Seafoods</a></li>
    <li><a href="#" class="inline-block px-4 py-2 rounded-full hover:bg-[#e35f0e]/20 transition">Traditional</a></li>
    <li><a href="#" class="inline-block px-4 py-2 rounded-full hover:bg-[#e35f0e]/20 transition">Main Courses</a></li>
    <li><a href="#" class="inline-block px-4 py-2 rounded-full hover:bg-[#e35f0e]/20 transition">Desserts</a></li>
    <li><a href="#" class="inline-block px-4 py-2 rounded-full hover:bg-[#e35f0e]/20 transition">Drinks</a></li>
    <li><a href="#" class="inline-block px-4 py-2 rounded-full hover:bg-[#e35f0e]/20 transition">Rem Voluptas</a></li>
  </ul>
</div>


    <!-- menu_bar -->
        <div class="bg-[#f7f7f5] px-[7vw] w-full pt-[15px] flex flex-row gap-[35px] bg-white dark:bg-black dark:text-white text-black">
            <!-- left menu bar div -->
            <div class="flex flex-col w-[65%]">
                <div class="flex flex-row mb-[25px] border-2 w-full rounded-[10px] gap-[15px] bg-white item items-center text-xl bg-white dark:bg-black text-black">
                    <i class="fa fa-search pl-[10px] py-[10px] dark:text-white" aria-hidden="true"></i>
                    <input type="text" placeholder="Search menu items." class="w-full px-[5px] py-[10px]" id="searchInput" oninput="filterProducts()">
                </div>
                           
                <div class="grid grid-cols-2 grid-rows-3 gap-6 bg-white dark:bg-black">
                    <div class="product-item flex flex-row bg-white col-start- row-start h-[30vh] p-[10px] rounded-[8px] border-[1px] bg-white dark:bg-black dark:text-white text-black" data-name="Burger">
                        <div class="">
                            <img src="./public/image/burger.jpg" alt="" class="rounded-[10px] h-[10vh] w-[8vw]">
                            <p class="text-xl text-black font-sans">Burgers</p>
                            <p>Burgers are a culinary masterpiece that captivates both the eyes and taste buds.</p>
                            <i class="fa fa-usd" aria-hidden="true">465</i>
                        </div>
                        <div class="">
                            <button class="px-[11px] py-[3.5px] rounded-full bg-[#e35f0e] border border-black text-2xl text-black hover:bg-[#f76f3e]">+</button>
                        </div>
                    </div>
                    <div class="product-item flex flex-row bg-white col-start-1 row-start-2 h-[30vh] p-[10px] rounded-[8px] border-[1px] bg-white dark:bg-black  dark:text-white text-black" data-name="Briyani">
                        <div class="">
                            <img src="./public/image/briyani.jpg" alt="" class="rounded-[10px] h-[10vh] w-[8vw]">
                            <p class="text-xl text-black font-sans">Biryani</p>
                            <p>Biryani is prepared from basmati rice mixed with several spices and cooked in a special way</p>
                            <i class="fa fa-usd" aria-hidden="true">150</i>
                        </div>
                        <div class="">
                            <button class="px-[11px] py-[3.5px] rounded-full bg-[#e35f0e] border border-black text-2xl text-black hover:bg-[#f76f3e]">+</button>
                        </div>
                    </div>
                    <div class="product-item flex flex-row bg-white col-start-1 row-start-3 h-[30vh] p-[10px] rounded-[8px] border-[1px] bg-white dark:bg-black dark:text-white text-black" data-name="Momo">
                        <div class="">
                            <img src="./public/image/momo.jpg" alt="" class="rounded-[10px] h-[10vh] w-[8vw]">
                            <p class="text-xl text-black font-sans">Momo</p>
                            <p>Momo are a type of South Asian dumplings that are hugely popular throughout the region</p>
                            <i class="fa fa-usd" aria-hidden="true">150</i>
                        </div>
                        <div class="">
                            <button class="px-[11px] py-[3.5px] rounded-full bg-[#e35f0e] border border-black text-2xl text-black hover:bg-[#f76f3e]">+</button>
                        </div>
                    </div>
                    <div class="product-item flex flex-row bg-white  row-start-1 h-[30vh] p-[10px] rounded-[8px] border-[1px] bg-white dark:bg-black dark:text-white text-black" data-name="Paratha">
                        <div class="">
                            <img src="./public/image/pratha.jpg" alt="" class="rounded-[10px] h-[10vh] w-[8vw]">
                            <p class="text-xl text-black font-sans">Paratha</p>
                            <p>Parathas are one of the most popular unleavened flatbreads</p>
                            <i class="fa fa-usd" aria-hidden="true">150</i>
                        </div>
                        <div class="">
                            <button class="px-[11px] py-[3.5px] rounded-full bg-[#e35f0e] border border-black text-2xl text-black hover:bg-[#f76f3e]">+</button>
                        </div>
                    </div>
                    <div class="product-item flex flex-row bg-white  row-start-2 h-[30vh] p-[10px] rounded-[8px] border-[1px] bg-white dark:bg-black dark:text-white text-black">
                        <div class="">
                            <img src="./public/image/cake.jpg" alt="" class="rounded-[10px] h-[10vh] w-[8vw]">
                            <p class="text-xl text-black font-sans">Desserts cake</p>
                            <p>A cake is a type of (usually) sweet dessert which is baked</p>
                            <i class="fa fa-usd" aria-hidden="true">150</i>
                        </div>
                        <div class="">
                            <button class="px-[11px] py-[3.5px] rounded-full bg-[#e35f0e] border border-black text-2xl text-black hover:bg-[#f76f3e]">+</button>
                        </div>
                    </div>
                    <div class="product-item flex flex-row row-start-3 h-[30vh] p-[10px] rounded-[8px] border-[1px] bg-white dark:bg-black dark:text-white text-black">
                        <div class="">
                            <img src="./public/image/wholecat-fish.jpg" alt="" class="rounded-[10px] h-[10vh] w-[8vw]">
                            <p class="text-xl text-black font-sans">Whole catfish with rice</p>
                            <p>A bowl of spicy catfish curry over steamed rice makes for a comforting and hearty meal.</p>
                            <i class="fa fa-usd" aria-hidden="true">150</i>
                        </div>
                        <div class="">
                            <button class="px-[11px] py-[3.5px] rounded-full bg-[#e35f0e] border border-black text-2xl text-black hover:bg-[#f76f3e]">+</button>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="w-[35%] bg-white rounded-[10px] p-[25px] border-[1px] h-[60vh] bg-white dark:bg-black text-white">
                <p class="text-black dark:text-white text-2xl py-[10px]">Basket</p>
                <div class="flex flex-row justify-between px-[10px] pb-[15px]">
                    <div class="">
                        <button class="border-2 rounded-full text[#919090] px-[12px] py-[3px]">-</button>
                        <button class="border-2 rounded-full text[#919090] px-[10px] py-[3px]">+</button>
                    </div>
                    <p class="text-xl">Biryani</p>
                    <i class="fa fa-usd" aria-hidden="true">150</i>
                </div>
                <div class="border-b-[1px] py-[20px] flex flex-row gap-[10px]">
                    <input type="text" placeholder="Enter coupon code" id="" class="text-black border-[1px] rounded-[10px] px-[10px] text-lg w-full">
                    <button class="rounded-[10px] bg-[#505052] py-[12px] px-[20px] text-lg text-white">
                        <!-- <i class="fa fa-check" aria-hidden="true"></i> -->
                         <i class="fa fa-moon-o" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="py-[20px]">
                    <div class="flex flex-col pb-[10px] font-sans">
                        <div class="flex flex-row p-[5px] text-lg justify-between">
                            <span class="">Sub Total</span>
                            <span class=""><i class="fa fa-usd" aria-hidden="true">40</i></span>
                        </div>
                        <div class="flex flex-row p-[5px] text-lg justify-between">
                            <span class="">delivery</span>
                            <span class="">Free</span>
                        </div>
                        <div class="flex flex-row p-[5px] text-xl font-bold justify-between">
                            <span class="">Order Total</span>
                            <span class=""><i class="fa fa-usd" aria-hidden="true">40</i></span>
                        </div>
                    </div>
                    <button class="rounded-[15px] border-2 items-center w-full text-2xl font-sans bg-[#e63e10] py-[10px]">Checkout .<i class="fa fa-usd" aria-hidden="true" id="myButton">40</i></button>
                </div>
            </div>
        </div>

</div>
@endsection
