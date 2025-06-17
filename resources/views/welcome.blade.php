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
<div class="bg-white dark:bg-black px-[7vw] py-6 text-black dark:text-white flex flex-row gap-6">
  <!-- Left: Product Menu -->
  <div class="w-2/3">
    <!-- Search Bar -->
    <div class="flex items-center mb-6 border border-gray-300 dark:border-gray-700 rounded-xl px-4 py-2 bg-white dark:bg-gray-900">
      <i class="fa fa-search mr-2 text-gray-500 dark:text-gray-400"></i>
      <input type="text" placeholder="Search menu items" id="searchInput" class="w-full bg-transparent outline-none text-lg dark:placeholder-gray-400" />
    </div>

    <!-- Product Grid -->
    <div class="grid grid-cols-2 gap-6">
      <!-- Card Example -->
      <div class="item-card item bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-4 flex items-start justify-between">
        <div class="space-y-2 max-w-[80%]">
          <img src="https://images.unsplash.com/photo-1586190848861-99aa4a171e90?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8YnVyZ2VyfGVufDB8fDB8fHww" alt="Burger" class="rounded-lg w-full h-32 object-cover" />
          <p class="item-name text-lg font-semibold">Burgers</p>
          <p class="text-sm text-gray-600 dark:text-gray-400">A juicy burger stacked to perfection.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 465</p>
        </div>
        <button class="ml-4 mt-2 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-10 h-10 text-xl flex items-center justify-center">+</button>
      </div>

      <div class="item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-4 flex items-start justify-between">
        <div class="space-y-2 max-w-[80%]">
          <img src="https://images.unsplash.com/photo-1642821373181-696a54913e93?w=1000&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YnJpeWFuaXxlbnwwfHwwfHx8MA%3D%3D" alt="Biryani" class="rounded-lg w-full h-32 object-cover" />
          <p class="item-name text-lg font-semibold">Biryani</p>
          <p class="text-sm text-gray-600 dark:text-gray-400">Aromatic rice blended with spices.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 150</p>
        </div>
        <button class="ml-4 mt-2 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-10 h-10 text-xl flex items-center justify-center">+</button>
      </div>

      <div class="item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-4 flex items-start justify-between">
        <div class="space-y-2 max-w-[80%]">
          <img src="https://images.pexels.com/photos/5409009/pexels-photo-5409009.jpeg" alt="Momo" class="rounded-lg w-full h-32 object-cover" />
          <p class="item-name text-lg font-semibold">Momo</p>
          <p class="text-sm text-gray-600 dark:text-gray-400">Steamed dumplings from the Himalayas.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 150</p>
        </div>
        <button class="ml-4 mt-2 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-10 h-10 text-xl flex items-center justify-center">+</button>
      </div>

      <div class="item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-4 flex items-start justify-between">
        <div class="space-y-2 max-w-[80%]">
          <img src="https://images.pexels.com/photos/20408462/pexels-photo-20408462.jpeg" alt="Paratha" class="rounded-lg w-full h-32 object-cover" />
          <p class="text-lg font-semibold">Paratha</p>
          <p class="item-name text-sm text-gray-600 dark:text-gray-400">Classic Indian flatbread.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 150</p>
        </div>
        <button class="ml-4 mt-2 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-10 h-10 text-xl flex items-center justify-center">+</button>
      </div>

      <div class="item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-4 flex items-start justify-between">
        <div class="space-y-2 max-w-[80%]">
          <img src="https://images.pexels.com/photos/6133303/pexels-photo-6133303.jpeg" alt="Cake" class="rounded-lg w-full h-32 object-cover" />
          <p class="item-name text-lg font-semibold">Desserts Cake</p>
          <p class="text-sm text-gray-600 dark:text-gray-400">Sweet dessert to finish your meal.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 150</p>
        </div>
        <button class="ml-4 mt-2 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-10 h-10 text-xl flex items-center justify-center">+</button>
      </div>

      <div class="item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-4 flex items-start justify-between">
        <div class="space-y-2 max-w-[80%]">
          <img src="https://images.pexels.com/photos/1059943/pexels-photo-1059943.jpeg" alt="Catfish" class="rounded-lg w-full h-32 object-cover" />
          <p class="item-name text-lg font-semibold">fishfry</p>
          <p class="text-sm text-gray-600 dark:text-gray-400">Spicy catfish curry over rice.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 150</p>
        </div>
        <button class="ml-4 mt-2 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-10 h-10 text-xl flex items-center justify-center">+</button>
      </div>
    </div>
  </div>

  <!-- Right: Basket Sidebar -->
  <div class="w-1/3 h-fit bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-700 rounded-xl p-6">
    <h2 class="text-xl font-semibold mb-4">Basket</h2>

    <div class="flex justify-between items-center mb-4">
      <div>
        <button class="border rounded-full px-3 py-1 text-gray-500">-</button>
        <button class="border rounded-full px-3 py-1 text-gray-500">+</button>
      </div>
      <p>Biryani</p>
      <span><i class="fa fa-usd"></i> 150</span>
    </div>item-name 

    <div class="flex gap-2 border-b pb-4 mb-4">
      <input type="text" placeholder="Enter coupon code" class="flex-1 px-3 py-2 text-black rounded-md border dark:border-gray-600" />
      <button class="bg-gray-700 text-white rounded-md px-4 py-2">
        <i class="fa fa-check"></i>
      </button>
    </div>

    <div class="space-y-2 text-sm">
      <div class="flex justify-between">
        <span>Sub Total</span>
        <span><i class="fa fa-usd"></i> 150</span>
      </div>
      <div class="flex justify-between">
        <span>Delivery</span>
        <span>Free</span>
      </div>
      <div class="flex justify-between font-semibold text-lg">
        <span>Order Total</span>
        <span><i class="fa fa-usd"></i> 150</span>
      </div>
    </div>

    <button class="w-full mt-4 py-3 bg-[#e63e10] text-white font-bold text-lg rounded-xl hover:bg-[#f74e25] transition-all">
      Checkout <i class="fa fa-arrow-right ml-2"></i>
    </button>
  </div>
</div>

</div>
@endsection
