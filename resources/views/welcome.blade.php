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
      <input type="text" placeholder="Search menu items" class="w-full bg-transparent outline-none text-lg dark:placeholder-gray-400" />
    </div>

    <!-- Product Grid -->
    <div class="grid grid-cols-2 gap-6">
      <!-- Card Example -->
      <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-4 flex items-start justify-between">
        <div class="space-y-2 max-w-[80%]">
          <img src="https://images.unsplash.com/photo-1586190848861-99aa4a171e90?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8YnVyZ2VyfGVufDB8fDB8fHww" alt="Burger" class="rounded-lg w-full h-32 object-cover" />
          <p class="text-lg font-semibold">Burgers</p>
          <p class="text-sm text-gray-600 dark:text-gray-400">A juicy burger stacked to perfection.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 465</p>
        </div>
        <button class="ml-4 mt-2 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-10 h-10 text-xl flex items-center justify-center">+</button>
      </div>

      <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-4 flex items-start justify-between">
        <div class="space-y-2 max-w-[80%]">
          <img src="https://images.unsplash.com/photo-1642821373181-696a54913e93?w=1000&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YnJpeWFuaXxlbnwwfHwwfHx8MA%3D%3D" alt="Biryani" class="rounded-lg w-full h-32 object-cover" />
          <p class="text-lg font-semibold">Biryani</p>
          <p class="text-sm text-gray-600 dark:text-gray-400">Aromatic rice blended with spices.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 150</p>
        </div>
        <button class="ml-4 mt-2 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-10 h-10 text-xl flex items-center justify-center">+</button>
      </div>

      <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-4 flex items-start justify-between">
        <div class="space-y-2 max-w-[80%]">
          <img src="https://images.pexels.com/photos/5409009/pexels-photo-5409009.jpeg" alt="Momo" class="rounded-lg w-full h-32 object-cover" />
          <p class="text-lg font-semibold">Momo</p>
          <p class="text-sm text-gray-600 dark:text-gray-400">Steamed dumplings from the Himalayas.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 150</p>
        </div>
        <button class="ml-4 mt-2 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-10 h-10 text-xl flex items-center justify-center">+</button>
      </div>

      <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-4 flex items-start justify-between">
        <div class="space-y-2 max-w-[80%]">
          <img src="https://images.pexels.com/photos/20408462/pexels-photo-20408462.jpeg" alt="Paratha" class="rounded-lg w-full h-32 object-cover" />
          <p class="text-lg font-semibold">Paratha</p>
          <p class="text-sm text-gray-600 dark:text-gray-400">Classic Indian flatbread.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 150</p>
        </div>
        <button class="ml-4 mt-2 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-10 h-10 text-xl flex items-center justify-center">+</button>
      </div>

      <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-4 flex items-start justify-between">
        <div class="space-y-2 max-w-[80%]">
          <img src="https://images.pexels.com/photos/6133303/pexels-photo-6133303.jpeg" alt="Cake" class="rounded-lg w-full h-32 object-cover" />
          <p class="text-lg font-semibold">Desserts Cake</p>
          <p class="text-sm text-gray-600 dark:text-gray-400">Sweet dessert to finish your meal.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 150</p>
        </div>
        <button class="ml-4 mt-2 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-10 h-10 text-xl flex items-center justify-center">+</button>
      </div>

      <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-4 flex items-start justify-between">
        <div class="space-y-2 max-w-[80%]">
          <img src="data:image/jpeg;base64,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" alt="Catfish" class="rounded-lg w-full h-32 object-cover" />
          <p class="text-lg font-semibold">fishfry</p>
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
    </div>

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
