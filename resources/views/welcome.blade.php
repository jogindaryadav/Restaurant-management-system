@extends('layouts.app')

@section('content')
<div class="bg-white dark:bg-black text-black">

  <!-- hero-section -->
  <div class="px-[3vw] sm:px-[7vw] py-[3vh] sm:py-[6vh] border-b border-gray-200 dark:border-gray-800 bg-white dark:bg-black text-black dark:text-white">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-3 sm:gap-10 items-center">
      <!-- Image left -->
       <div class="overflow-hidden rounded-2xl shadow-md">
        <img src="https://images.pexels.com/photos/1322184/pexels-photo-1322184.jpeg" alt="Restaurant Image" class="h-full w-full object-cover transition-transform duration-300 hover:scale-105" />
       </div>

     <!-- Info Section -->
      <div class="md:col-span-2 flex flex-col justify-between gap-3 sm:gap-6">
        <div class="flex flex-col gap-1">
          <h2 class="text-xl sm:text-3xl font-extrabold tracking-tight">Unique Kitchen</h2>
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
        <div class="ring ring-offset-2 mt-2 sm:mt-4 border border-gray-300 dark:border-gray-600 rounded-lg px-4 py-3 text-sm flex items-center justify-between gap-2 max-w-sm">
          <span><i class="fa fa-clock-o mr-2"></i>Delivery in <strong>15 min</strong></span>
          <a href="#" class="text-[#e35f0e] underline hover:text-orange-600 transition">Change</a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- item list section -->
<div class="border-b border-gray-200 dark:border-gray-700 px-[4vw] sm:px-[7vw] py-6 bg-white dark:bg-black">
  <div class="flex items-center justify-between mb-4">
    <h2 class="text-md sm:text-2xl font-semibold text-gray-800 dark:text-white">Browse Categories</h2>
  </div>

  <ul class="custom-scroll flex gap-2 sm:gap-6 overflow-x-auto whitespace-nowrap text-base font-medium text-gray-700 dark:text-gray-200 scrollbar-thin scrollbar-thumb-[#e35f0e]/70 scrollbar-track-transparent">
    <li data-category="all"><a href="#" class="category-link inline-block px-4 py-2 rounded-full bg-[#e35f0e]/10 text-[#e35f0e] hover:bg-[#e35f0e]/20 transition">All Categories</a></li>
    <li data-category="appetizer"><a href="#" class="category-link inline-block px-4 py-2 rounded-full hover:bg-[#e35f0e]/20 transition">Appetizer</a></li>
    <li data-category="specials"><a href="#" class="category-link inline-block px-4 py-2 rounded-full hover:bg-[#e35f0e]/20 transition">Specials</a></li>
    <li data-category="salads"><a href="#" class="category-link inline-block px-4 py-2 rounded-full hover:bg-[#e35f0e]/20 transition">Salads</a></li>
    <li data-category="seafoods"><a href="#" class="category-link inline-block px-4 py-2 rounded-full hover:bg-[#e35f0e]/20 transition">Seafoods</a></li>
    <li data-category="traditional"><a href="#" class="category-link inline-block px-4 py-2 rounded-full hover:bg-[#e35f0e]/20 transition">Traditional</a></li>
    <li data-category="desserts"><a href="#" class="category-link inline-block px-4 py-2 rounded-full hover:bg-[#e35f0e]/20 transition">Desserts</a></li>
    <li data-category="drinks"><a href="#" class="category-link inline-block px-4 py-2 rounded-full hover:bg-[#e35f0e]/20 transition">Drinks</a></li>
  </ul>
</div>

   <!-- Search Bar for small screen -->
    <div class="sm:hidden block">
      <div class="flex items-center mx-[3vw] my-4 border border-gray-300 dark:border-gray-700 rounded-xl px-4 py-2 bg-white dark:bg-gray-900">
        <i class="fa fa-search mr-2 text-gray-500 dark:text-gray-400"></i>
        <input type="text" placeholder="Search menu items" id="searchInputSm" class="w-full bg-transparent outline-none text-sm sm:text-lg dark:placeholder-gray-400" />
      </div>
    </div>
<!-- menu_bar -->
<div class="bg-white dark:bg-black px-[4vw] sm:px-[7vw] sm:py-6 py-3 text-black dark:text-white flex flex-col sm:flex-row gap-4 md:gap-6">
  <!-- Left: Product Menu -->
  <div class="order-last sm:order-1 sm:w-2/3 w-fully md:mx-auto">
   <!-- Search Bar -->
    <div class="hidden sm:block">
      <div class="flex items-center mb-6 border border-gray-300 dark:border-gray-700 rounded-xl px-4 py-2 mx-2 bg-white dark:bg-gray-900">
        <i class="fa fa-search mr-2 text-gray-500 dark:text-gray-400"></i>
        <input type="text" placeholder="Search menu items" id="searchInputLg" class="w-full bg-transparent outline-none text-sm sm:text-lg dark:placeholder-gray-400" />
      </div>
    </div>

   <!-- Product Grid -->
    <div id="productGrid" class="grid sm:grid-cols-2 md:grid-cols-3 gap-5">
    
      <!-- Card 1 -->
      <div data-category="drinks" class="ring ring-offset-1 ring-offset-black dark:ring-offset-white item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 max-w-[100%]">
          <img src="{{ asset('images/coffee.jpg') }}" alt="Catfish" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
              <p class="item-name text-lg font-semibold">Coffee</p>
              <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
            </div>
            <button class="ml-4 mt-1 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">A good day starts with a great cup of coffee.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 120</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div data-category="traditional" class="ring ring-offset-1 ring-offset-black dark:ring-offset-white item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 max-w-[100%]">
          <img src="{{ asset('images/briyani.jpeg') }}" alt="Biryani" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
              <p class="item-name text-lg font-semibold">Biryani</p>
              <div class="inline-block w-3 h-3 bg-red-500 rounded-sm"></div>
            </div>
           <button class="ml-4 mt-1 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">Aromatic rice blended with spices.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i>100</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div data-category="specials" class="ring ring-offset-1 ring-offset-black dark:ring-offset-white item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 max-w-[100%]">
          <img src="{{ asset('images/momo.jpg') }}" alt="Momo" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
             <p class="item-name text-lg font-semibold">Momo</p>
             <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
            </div>
           <button class="ml-4 mt-1 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">Steamed dumplings from the Himalayas.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i>160</p>
        </div>
      </div>

      <!-- Card 4 -->
      <div data-category="traditional" class="ring ring-offset-1 ring-offset-black dark:ring-offset-white item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 max-w-100%]">
          <img src="{{ asset('images/pratha.jpg') }}" alt="Paratha" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
             <p class="item-name text-lg font-semibold">Paratha</p>
             <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
            </div>
           <button class="ml-4 mt-1 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>        
          <p class="text-sm text-gray-600 dark:text-gray-400">Classic Indian flatbread.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i>60</p>
        </div>
      </div>

      <!-- Card 5 -->
      <div data-category="desserts" class="ring ring-offset-1 ring-offset-black dark:ring-offset-white item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 max-w-[100%]">
          <img src="{{ asset('images/coffee.jpg') }}" alt="Catfish" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
             <p class="item-name text-lg font-semibold">Sweets</p>
             <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
            </div>
           <button class="ml-4 mt-1 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">Spicy catfish curry over rice.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 250</p>
        </div>
      </div>

      <!-- Card 6 -->
      <div data-category="seafoods" class="ring ring-offset-1 ring-offset-black dark:ring-offset-white item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 max-w-[100%]">
          <img src="{{ asset('images/fish.jpeg') }}" alt="Catfish" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
            <p class="item-name text-lg font-semibold">Fishfry</p>
            <div class="inline-block w-3 h-3 bg-red-500 rounded-sm"></div>
            </div>
          <button class="ml-4 mt-1 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">Spicy catfish curry over rice.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 250</p>
        </div>
      </div>
      <!-- card 7 -->
      <div data-category="appetizer" class="ring ring-offset-1 ring-offset-black dark:ring-offset-white item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 max-w-[100%]">
          <img src="{{ asset('images/noodles.jpeg') }}" alt="Catfish" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
            <p class="item-name text-lg font-semibold">Noodels</p>
            <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
            </div>
          <button class="ml-4 mt-1 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">Noodles are a type of pasta made from unleavened dough. </p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 180</p>
        </div>
      </div>

      <!-- card 8 -->
      <div data-category="specials" class="ring ring-offset-1 ring-offset-black dark:ring-offset-white item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 max-w-[100%]">
          <img src="{{ asset('images/burger.jpg') }}" alt="Burger" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
            <p class="item-name text-lg font-semibold">Burger</p>
            <div class="inline-block w-3 h-3 bg-red-500 rounded-sm"></div>
            </div>
          <button class="ml-4 mt-1 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">A juicy burger stacked to perfection.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i>150</p>
        </div>
      </div>

      <!-- card 9 -->
      <div data-category="drinks" class="ring ring-offset-1 ring-offset-black dark:ring-offset-white item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 max-w-[100%]">
          <img src="{{ asset('images/tea.jpg') }}" alt="Catfish" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
            <p class="item-name text-lg font-semibold">Tea</p>
            <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
            </div>
          <button class="ml-4 mt-1 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">Escape the ordinary with our exquisite selection of handcrafted teas.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 80</p>
        </div>
      </div>
      <!-- card 10 -->
      <div data-category="drinks" class="ring ring-offset-1 ring-offset-black dark:ring-offset-white item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-2 flex items-start justify-between" style="display: none;">
        <div class="space-y-2 max-w-[100%]">
          <img src="{{ asset('images/juice.jpg') }}" alt="juice" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
            <p class="item-name text-lg font-semibold">Juice</p>
            <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
            </div>
          <button class="ml-4 mt-1 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">The juice which contain flavour to make your day sweet.</p>
          <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 120</p>
        </div>
      </div>
      <!-- Card 11 -->
      <div data-category="salads" class="ring ring-offset-1 ring-offset-black dark:ring-offset-white item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-2 flex items-start justify-between" style="display: none;">
        <div class="space-y-2 max-w-[100%]">
            <img src="{{ asset('images/caesar-salad.jpg') }}" alt="Caesar Salad" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
            <div class="flex flex-row p-[5px] items-center justify-between">
                <div class="items-center flex flex-row gap-3">
                  <p class="item-name text-lg font-semibold">Caesar Salad</p>
                  <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
                </div>
                <button class="ml-4 mt-1 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-400">Classic Caesar salad with grilled chicken.</p>
            <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 180</p>
        </div>
      </div>

      <!-- Card 12 -->
     <div data-category="desserts" class="ring ring-offset-1 ring-offset-black dark:ring-offset-white item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-2 flex items-start justify-between" style="display: none;">
        <div class="space-y-2 max-w-[100%]">
            <img src="{{ asset('images/puff.jpg') }}" alt="Puff Pastry" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
            <div class="flex flex-row p-[5px] items-center justify-between">
                <div class="items-center flex flex-row gap-3">
                    <p class="item-name text-lg font-semibold">Puff Pastry</p>
                    <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
                </div>
                <button class="ml-4 mt-1 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-400">Light and flaky puff pastry with a sweet filling.</p>
            <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 90</p>
        </div>
     </div>
     
     <!-- card 13 -->
      <div data-category="drinks" class="ring ring-offset-1 ring-offset-black dark:ring-offset-white item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-2 flex items-start justify-between" style="display: none;">
        <div class="space-y-2 max-w-[100%]">
            <img src="{{ asset('images/redbull.jpg') }}" alt="Caesar Salad" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
            <div class="flex flex-row p-[5px] items-center justify-between">
                <div class="items-center flex flex-row gap-3">
                  <p class="item-name text-lg font-semibold">Red Bull</p>
                  <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
                </div>
                <button class="ml-4 mt-1 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-400">Classic Caesar salad with grilled chicken.</p>
            <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 120</p>
        </div>
      </div>

      <!-- card 14 -->
      <div data-category="drinks" class="ring ring-offset-1 ring-offset-black dark:ring-offset-white item-card bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-2 flex items-start justify-between" style="display: none;">
        <div class="space-y-2 max-w-[100%]">
            <img src="{{ asset('images/cocacola.jpg') }}" alt="Caesar Salad" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
            <div class="flex flex-row p-[5px] items-center justify-between">
                <div class="items-center flex flex-row gap-3">
                  <p class="item-name text-lg font-semibold">Coca cola</p>
                  <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
                </div>
                <button class="ml-4 mt-1 text-white bg-[#e35f0e] hover:bg-[#f76f3e] rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-400">Classic Caesar salad with grilled chicken.</p>
            <p class="text-orange-600 font-medium"><i class="fa fa-usd"></i> 80</p>
        </div>
      </div>
    </div>
  </div>


  <!-- Right: Basket Sidebar -->
  <div class="order-first sm:order-2 w-fully sm:w-1/3 h-fit bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-700 rounded-xl p-6">
    <h2 class="text-md sm:text-xl font-semibold mb-4">Basket</h2>

    <div class="flex justify-between items-center mb-4">
      <div>
        <button class="border rounded-full px-3 py-1 text-gray-500">-</button>
        <button class="border rounded-full px-3 py-1 text-gray-500">+</button>
      </div>
      <p class="text-sm">Biryani</p>
      <span><i class="fa fa-usd"></i> 150</span>
    </div>item-name 

    <div class="space-y-2 text-sm">
      <div class="flex justify-between">
        <span>Sub Total</span>
        <span><i class="fa fa-usd"></i> 150</span>
      </div>
      <div class="flex justify-between">
        <span>Delivery</span>
        <span>Free</span>
      </div>
      <div class="flex justify-between font-semibold text-md sm:text-lg">
        <span>Order Total</span>
        <span><i class="fa fa-usd"></i> 150</span>
      </div>
    </div>

    <button class="w-full mt-4 py-3 bg-[#e63e10] text-white font-bold text-lg rounded-xl hover:bg-[#f74e25] transition-all">
      Checkout <i class="fa fa-arrow-right ml-2"></i>
    </button>
  </div>
</div>
<button onclick="topFunction()" id="myBtn" class="hidden fixed bottom-5 right-7 z-[99] border-none outline-none bg-orange-600 text-white cursor-pointer px-4 py-3 rounded-[10px] text-md">
 Top
</button>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categoryLinks = document.querySelectorAll('.category-link');
        const itemCards = document.querySelectorAll('.item-card');
        const searchInputSm = document.getElementById('searchInputSm');
        const searchInputLg = document.getElementById('searchInputLg');

        // Function to filter items based on category
        const filterByCategory = (category) => {
            itemCards.forEach(card => {
                if (category === 'all') {
                    card.style.display = 'block';
                } else {
                    if (card.dataset.category === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                }
            });
        };

        // Function to filter items based on search input
        const filterBySearch = (searchTerm) => {
            const term = searchTerm.toLowerCase();
            itemCards.forEach(card => {
                const itemName = card.querySelector('.item-name').textContent.toLowerCase();
                if (itemName.includes(term)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        };

        // Event listeners for category links
        categoryLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const category = this.parentElement.dataset.category;

                // Toggle active class on category links
                categoryLinks.forEach(link => link.classList.remove('bg-[#e35f0e]/10', 'text-[#e35f0e]'));
                this.classList.add('bg-[#e35f0e]/10', 'text-[#e35f0e]');

                filterByCategory(category);
            });
        });

        // Event listeners for search inputs
        searchInputSm.addEventListener('keyup', (event) => {
            filterBySearch(event.target.value);
        });

        searchInputLg.addEventListener('keyup', (event) => {
            filterBySearch(event.target.value);
        });
    });

let mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.documentElement.scrollTop= 0;
}
</script>
@endsection