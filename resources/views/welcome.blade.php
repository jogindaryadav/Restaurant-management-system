@extends('layouts.app')

@section('content')
<div class="bg-off-white dark:bg-charcoal text-charcoal">

  <!-- hero-section -->
  <div class="px-[3vw] sm:px-[7vw] py-[3vh] sm:py-[6vh] border-b border-gray-200 dark:border-gray-800 bg-off-white dark:bg-charcoal text-charcoal dark:text-off-white">
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
            <a href="#" class="text-sm text-gray-500 hover:text-royal-blue underline ml-2">More info</a>
          </p>
          <p class="text-base text-gray-600 dark:text-gray-300">Bhairahawa, Rupandehi</p>
        </div>

        <!-- Rating -->
        <div class="flex items-center space-x-1 text-royal-blue">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star-o"></i>
          <a href="#" class="text-sm text-royal-blue underline ml-2">(2) Reviews</a>
        </div>

        <!-- Delivery Info -->
        <div class="ring ring-offset-2 mt-2 sm:mt-4 border border-gray-300 dark:border-royal-blue rounded-lg px-4 py-3 text-sm flex items-center justify-between gap-2 max-w-sm">
          <span><i class="fa fa-clock-o mr-2"></i>Delivery in <strong>15 min</strong></span>
          <a href="#" class="text-royal-blue underline hover:text-royal-blue-light transition">Change</a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- item list section -->
<div class="border-b border-gray-200 dark:border-royal-blue px-[4vw] sm:px-[7vw] py-6 bg-off-white dark:bg-charcoal">
  <div class="flex items-center justify-between mb-4">
    <h2 class="text-md sm:text-2xl font-semibold text-charcoal dark:text-off-white">Browse Categories</h2>
  </div>

  <ul class="custom-scroll flex gap-2 sm:gap-6 overflow-x-auto whitespace-nowrap text-base font-medium text-charcoal dark:text-off-white scrollbar-thin scrollbar-thumb-royal-blue scrollbar-track-transparent">
    <li data-category="all"><a href="#" class="category-link inline-block px-4 py-2 rounded-full bg-royal-blue text-white hover:bg-royal-blue-light transition">All Categories</a></li>
    <li data-category="appetizer"><a href="#" class="category-link inline-block px-4 py-2 rounded-full hover:bg-royal-blue hover:text-white transition">Appetizer</a></li>
    <li data-category="specials"><a href="#" class="category-link inline-block px-4 py-2 rounded-full hover:bg-royal-blue hover:text-white transition">Specials</a></li>
    <li data-category="salads"><a href="#" class="category-link inline-block px-4 py-2 rounded-full hover:bg-royal-blue hover:text-white transition">Salads</a></li>
    <li data-category="seafoods"><a href="#" class="category-link inline-block px-4 py-2 rounded-full hover:bg-royal-blue hover:text-white transition">Seafoods</a></li>
    <li data-category="traditional"><a href="#" class="category-link inline-block px-4 py-2 rounded-full hover:bg-royal-blue hover:text-white transition">Traditional</a></li>
    <li data-category="desserts"><a href="#" class="category-link inline-block px-4 py-2 rounded-full hover:bg-royal-blue hover:text-white transition">Desserts</a></li>
    <li data-category="drinks"><a href="#" class="category-link inline-block px-4 py-2 rounded-full hover:bg-royal-blue hover:text-white transition">Drinks</a></li>
  </ul>
</div>

   <!-- Search Bar for small screen -->
    <div class="sm:hidden block">
      <div class="flex items-center mx-[3vw] my-4 border border-gray-300 dark:border-royal-blue rounded-xl px-4 py-2 bg-off-white dark:bg-charcoal">
        <i class="fa fa-search mr-2 text-gray-500 dark:text-gray-400"></i>
        <input type="text" placeholder="Search menu items" id="searchInputSm" class="w-full bg-transparent outline-none text-sm sm:text-lg dark:placeholder-gray-400" />
      </div>
    </div>
<!-- menu_bar -->
<div class="bg-off-white dark:bg-charcoal px-[4vw] sm:px-[7vw] sm:py-6 py-3 text-charcoal dark:text-off-white flex flex-col lg:flex-row gap-4 md:gap-6">
  <!-- Left: Product Menu -->
  <div class="order-last lg:order-1 lg:w-2/3 w-full">
   <!-- Search Bar -->
    <div class="hidden sm:block">
      <div class="flex items-center mb-6 border border-gray-300 dark:border-royal-blue rounded-xl px-4 py-2 mx-2 bg-off-white dark:bg-charcoal">
        <i class="fa fa-search mr-2 text-gray-500 dark:text-gray-400"></i>
        <input type="text" placeholder="Search menu items" id="searchInputLg" class="w-full bg-transparent outline-none text-sm sm:text-lg dark:placeholder-gray-400" />
      </div>
    </div>

   <!-- Product Grid -->
    <div id="productGrid" class="grid sm:grid-cols-2 md:grid-cols-3 gap-5">
    
      <!-- Card 1 -->
      <div data-category="drinks" class="item-card bg-off-white dark:bg-charcoal border border-gray-300 ring ring-offset-2 rounded-xl p-2 flex items-start justify-between">

        <div class="space-y-2 w-full">
          <img src="{{ asset('images/coffee.jpg') }}" alt="Coffee" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
              <p class="item-name text-lg font-semibold">Coffee</p>
              <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
            </div>
            <button class="add-to-cart ml-4 mt-1 text-white bg-royal-gradient hover:opacity-90 rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">A good day starts with a great cup of coffee.</p>
          <p class="item-price text-royal-blue font-medium" data-price="120">₹ 120</p>
        </div>
      </div>

      <!-- Card 2 -->

      <div data-category="traditional" class="item-card bg-off-white dark:bg-charcoal border border-gray-300 ring ring-offset-2 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 w-full">
          <img src="{{ asset('images/briyani.jpeg') }}" alt="Biryani" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
              <p class="item-name text-lg font-semibold">Biryani</p>
              <div class="inline-block w-3 h-3 bg-red-500 rounded-sm"></div>
            </div>
           <button class="add-to-cart ml-4 mt-1 text-white bg-royal-gradient hover:opacity-90 rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">Aromatic rice blended with spices.</p>
          <p class="item-price text-royal-blue font-medium" data-price="100">₹100</p>
        </div>
      </div>

      <!-- Card 3 -->

      <div data-category="specials" class="item-card bg-off-white dark:bg-charcoal border border-gray-300 ring ring-offset-2 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 w-full">
          <img src="{{ asset('images/momo.jpg') }}" alt="Momo" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
             <p class="item-name text-lg font-semibold">Momo</p>
             <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
            </div>
           <button class="add-to-cart ml-4 mt-1 text-white bg-royal-gradient hover:opacity-90 rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">Steamed dumplings from the Himalayas.</p>
          <p class="item-price text-royal-blue font-medium" data-price="160">₹160</p>
        </div>
      </div>

      <!-- Card 4 -->
      <div data-category="traditional" class="item-card bg-off-white dark:bg-charcoal border border-gray-300 ring ring-offset-2 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 w-full">
          <img src="{{ asset('images/pratha.jpg') }}" alt="Paratha" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
             <p class="item-name text-lg font-semibold">Paratha</p>
             <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
            </div>
           <button class="add-to-cart ml-4 mt-1 text-white bg-royal-gradient hover:opacity-90 rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>        
          <p class="text-sm text-gray-600 dark:text-gray-400">Classic Indian flatbread.</p>
          <p class="item-price text-royal-blue font-medium" data-price="60">₹60</p>
        </div>
      </div>

      <!-- Card 5 -->

      <div data-category="desserts" class="item-card bg-off-white dark:bg-charcoal border border-gray-300 ring ring-offset-2 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 w-full">
          <img src="{{ asset('images/sweets.jpg') }}" alt="Sweets" class="rounded-lg w-full h-40 object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
             <p class="item-name text-lg font-semibold">Sweets</p>
             <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
            </div>
           <button class="add-to-cart ml-4 mt-1 text-white bg-royal-gradient hover:opacity-90 rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">A variety of sweet treats.</p>
          <p class="item-price text-royal-blue font-medium" data-price="250">₹ 250</p>
        </div>
      </div>

      <!-- Card 6 -->

      <div data-category="seafoods" class="item-card bg-off-white dark:bg-charcoal border border-gray-300 ring ring-offset-2 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 w-full">
          <img src="{{ asset('images/fish.jpeg') }}" alt="Fishfry" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
            <p class="item-name text-lg font-semibold">Fishfry</p>
            <div class="inline-block w-3 h-3 bg-red-500 rounded-sm"></div>
            </div>
          <button class="add-to-cart ml-4 mt-1 text-white bg-royal-gradient hover:opacity-90 rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">Spicy fish fry.</p>
          <p class="item-price text-royal-blue font-medium" data-price="250">₹ 250</p>
        </div>
      </div>
      <!-- card 7 -->

      <div data-category="appetizer" class="item-card bg-off-white dark:bg-charcoal border border-gray-300 ring ring-offset-2 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 w-full">
          <img src="{{ asset('images/noodles.jpeg') }}" alt="Noodles" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
            <p class="item-name text-lg font-semibold">Noodles</p>
            <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
            </div>
          <button class="add-to-cart ml-4 mt-1 text-white bg-royal-gradient hover:opacity-90 rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">A type of pasta made from unleavened dough. </p>
          <p class="item-price text-royal-blue font-medium" data-price="180">₹ 180</p>
        </div>
      </div>

      <!-- card 8 -->
      <div data-category="specials" class="item-card bg-off-white dark:bg-charcoal border border-gray-300 ring ring-offset-2 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 w-full">
          <img src="{{ asset('images/burger.jpg') }}" alt="Burger" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
            <p class="item-name text-lg font-semibold">Burger</p>
            <div class="inline-block w-3 h-3 bg-red-500 rounded-sm"></div>
            </div>
          <button class="add-to-cart ml-4 mt-1 text-white bg-royal-gradient hover:opacity-90 rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">A juicy burger stacked to perfection.</p>
          <p class="item-price text-royal-blue font-medium" data-price="150">₹150</p>
        </div>
      </div>

      <!-- card 9 -->
      <div data-category="drinks" class="item-card bg-off-white dark:bg-charcoal border border-gray-300 ring ring-offset-2 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 w-full">
          <img src="{{ asset('images/tea.jpg') }}" alt="Tea" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
            <p class="item-name text-lg font-semibold">Tea</p>
            <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
            </div>
          <button class="add-to-cart ml-4 mt-1 text-white bg-royal-gradient hover:opacity-90 rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">Exquisite selection of handcrafted teas.</p>
          <p class="item-price text-royal-blue font-medium" data-price="80">₹ 80</p>
        </div>
      </div>
      <!-- card 10 -->
      <div data-category="drinks" class="item-card bg-off-white dark:bg-charcoal border border-gray-300 ring ring-offset-2 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 w-full">
          <img src="{{ asset('images/juice.jpg') }}" alt="juice" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
          <div class="flex flex-row p-[5px] items-center justify-between">
            <div class="items-center flex flex-row gap-3">
            <p class="item-name text-lg font-semibold">Juice</p>
            <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
            </div>
          <button class="add-to-cart ml-4 mt-1 text-white bg-royal-gradient hover:opacity-90 rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-400">The juice to make your day sweet.</p>
          <p class="item-price text-royal-blue font-medium" data-price="120">₹ 120</p>
        </div>
      </div>
      <!-- Card 11 -->

      <div data-category="salads" class="item-card bg-off-white dark:bg-charcoal border border-gray-300 ring ring-offset-2 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 w-full">
            <img src="{{ asset('images/caesar-salad.jpg') }}" alt="Caesar Salad" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
            <div class="flex flex-row p-[5px] items-center justify-between">
                <div class="items-center flex flex-row gap-3">
                  <p class="item-name text-lg font-semibold">Caesar Salad</p>
                  <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
                </div>
                <button class="add-to-cart ml-4 mt-1 text-white bg-royal-gradient hover:opacity-90 rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-400">Classic Caesar salad with grilled chicken.</p>
            <p class="item-price text-royal-blue font-medium" data-price="180">₹ 180</p>
        </div>
      </div>

      <!-- Card 12 -->
     <div data-category="desserts" class="item-card bg-off-white dark:bg-charcoal border border-gray-300 ring ring-offset-2 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 w-full">
            <img src="{{ asset('images/puff.jpg') }}" alt="Puff Pastry" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
            <div class="flex flex-row p-[5px] items-center justify-between">
                <div class="items-center flex flex-row gap-3">
                    <p class="item-name text-lg font-semibold">Puff Pastry</p>
                    <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
                </div>
                <button class="add-to-cart ml-4 mt-1 text-white bg-royal-gradient hover:opacity-90 rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-400">Light and flaky puff pastry with a sweet filling.</p>
            <p class="item-price text-royal-blue font-medium" data-price="90">₹ 90</p>
        </div>
     </div>
     
     <!-- card 13 -->

      <div data-category="drinks" class="item-card bg-off-white dark:bg-charcoal border border-gray-300 ring ring-offset-2 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 w-full">
            <img src="{{ asset('images/redbull.jpg') }}" alt="Red Bull" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
            <div class="flex flex-row p-[5px] items-center justify-between">
                <div class="items-center flex flex-row gap-3">
                  <p class="item-name text-lg font-semibold">Red Bull</p>
                  <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
                </div>
                <button class="add-to-cart ml-4 mt-1 text-white bg-royal-gradient hover:opacity-90 rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-400">Energy drink.</p>
            <p class="item-price text-royal-blue font-medium" data-price="120">₹ 120</p>
        </div>
      </div>

      <!-- card 14 -->
      <div data-category="drinks" class="item-card bg-off-white dark:bg-charcoal border border-gray-300 ring ring-offset-2 rounded-xl p-2 flex items-start justify-between">
        <div class="space-y-2 w-full">
            <img src="{{ asset('images/cocacola.jpg') }}" alt="Coca cola" class="rounded-lg w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
            <div class="flex flex-row p-[5px] items-center justify-between">
                <div class="items-center flex flex-row gap-3">
                  <p class="item-name text-lg font-semibold">Coca cola</p>
                  <div class="inline-block w-3 h-3 bg-green-400 rounded-sm"></div>
                </div>
                <button class="add-to-cart ml-4 mt-1 text-white bg-royal-gradient hover:opacity-90 rounded-full w-8 h-8 text-md flex items-center justify-center">+</button>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-400">Carbonated soft drink.</p>
            <p class="item-price text-royal-blue font-medium" data-price="80">₹ 80</p>
        </div>
      </div>
    </div>
     <button id="loadMoreBtn" class="w-full mt-4 py-3 bg-royal-gradient text-white font-bold text-lg rounded-xl hover:opacity-90 transition-all">Load More</button>
  </div>


  <!-- Right: Basket Sidebar -->
  <div class="order-first lg:order-2 w-full lg:w-1/3 h-fit bg-off-white dark:bg-charcoal border border-gray-300 dark:border-royal-blue p-6 rounded-lg shadow-lg">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-md sm:text-xl font-semibold">Basket</h2>
        <button id="clear-basket" class="text-sm text-royal-blue hover:underline">Clear</button>
    </div>

    <div id="basket-items" class="space-y-4">
      <!-- Basket items will be added here -->
    </div>

    <div class="space-y-2 text-sm mt-6 border-t border-gray-200 dark:border-gray-700 pt-4">
      <div class="flex justify-between">
        <span>Sub Total</span>
        <span id="subtotal">₹ 0</span>
      </div>
      <div class="flex justify-between">
        <span>Delivery</span>
        <span>Free</span>
      </div>
      <div class="flex justify-between font-semibold text-md sm:text-lg">
        <span>Order Total</span>
        <span id="total">₹ 0</span>
      </div>
    </div>

    <button id="checkout-btn" class="w-full mt-4 py-3 bg-royal-gradient text-white font-bold text-lg rounded-xl hover:opacity-90 transition-all">
      Checkout <i class="fa fa-arrow-right ml-2"></i>
    </button>
  </div>
</div>

<!-- Checkout Modal -->
<div id="checkout-modal" class="fixed inset-0 bg-black bg-opacity-50 items-center justify-center hidden z-50">
  <div class="bg-off-white dark:bg-charcoal rounded-lg shadow-lg p-6 w-full max-w-md">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-xl font-semibold text-charcoal dark:text-off-white">Checkout</h2>
      <button id="close-modal" class="text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">&times;</button>
    </div>
    <div id="modal-basket-summary"></div>
    <div class="mt-4">
        <h3 class="text-lg font-medium text-charcoal dark:text-off-white">Payment Details</h3>
        <form class="space-y-4 mt-2">
            <div>
                <label for="card-number" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Card Number</label>
                <input type="text" id="card-number" class="w-full mt-1 p-2 border rounded-md bg-gray-100 dark:bg-gray-700 text-charcoal dark:text-off-white" placeholder="xxxx-xxxx-xxxx-xxxx">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="expiry-date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Expiry Date</label>
                    <input type="text" id="expiry-date" class="w-full mt-1 p-2 border rounded-md bg-gray-100 dark:bg-gray-700 text-charcoal dark:text-off-white" placeholder="MM/YY">
                </div>
                <div>
                    <label for="cvv" class="block text-sm font-medium text-gray-700 dark:text-gray-300">CVV</label>
                    <input type="text" id="cvv" class="w-full mt-1 p-2 border rounded-md bg-gray-100 dark:bg-gray-700 text-charcoal dark:text-off-white" placeholder="123">
                </div>
            </div>
            <button type="submit" class="w-full mt-4 py-3 bg-green-500 text-white font-bold text-lg rounded-xl hover:bg-green-600 transition-all">Pay Now</button>
        </form>
    </div>
  </div>
</div>

<button onclick="topFunction()" id="myBtn" class="hidden fixed bottom-5 right-7 z-[99] bg-royal-gradient text-white rounded-full shadow-lg hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-royal-blue-light focus:ring-opacity-75 transition-transform duration-200 ease-in-out transform hover:scale-110 p-3">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
    </svg>
</button>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkoutBtn = document.getElementById('checkout-btn');
        const checkoutModal = document.getElementById('checkout-modal');
        const closeModal = document.getElementById('close-modal');
        const modalBasketSummary = document.getElementById('modal-basket-summary');
        const categoryLinks = document.querySelectorAll('.category-link');
        const itemCards = document.querySelectorAll('.item-card');
        const searchInputSm = document.getElementById('searchInputSm');
        const searchInputLg = document.getElementById('searchInputLg');
        const addToCartButtons = document.querySelectorAll('.add-to-cart');
        const basketItemsContainer = document.getElementById('basket-items');
        const subtotalElement = document.getElementById('subtotal');
        const totalElement = document.getElementById('total');
        const clearBasketButton = document.getElementById('clear-basket');
        const loadMoreBtn = document.getElementById('loadMoreBtn');

        let basket = {};

        // Function to filter items based on category
        const filterByCategory = (category) => {
            itemCards.forEach(card => {
                if (category === 'all') {
                    card.style.display = 'flex';
                } else {
                    if (card.dataset.category === category) {
                        card.style.display = 'flex';
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
                    card.style.display = 'flex';
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
                categoryLinks.forEach(link => {
                    link.classList.remove('bg-royal-blue', 'text-white');
                    link.classList.remove('bg-[#e35f0e]/10', 'text-[#e35f0e]');
                });
                this.classList.add('bg-royal-blue', 'text-white');

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

        // Add to cart functionality
        addToCartButtons.forEach(button => {
            button.addEventListener('click', () => {
                const card = button.closest('.item-card');
                const itemName = card.querySelector('.item-name').textContent;
                const itemPrice = parseFloat(card.querySelector('.item-price').dataset.price);

                if (basket[itemName]) {
                    basket[itemName].quantity++;
                } else {
                    basket[itemName] = {
                        price: itemPrice,
                        quantity: 1
                    };
                }
                updateBasket();
            });
        });

        function updateBasket() {
            basketItemsContainer.innerHTML = '';
            let subtotal = 0;

            for (const itemName in basket) {
                const item = basket[itemName];
                const itemTotal = item.price * item.quantity;
                subtotal += itemTotal;

                const basketItem = document.createElement('div');
                basketItem.classList.add('flex', 'justify-between', 'items-center');
                basketItem.innerHTML = `
                    <div>
                        <p class="text-sm font-semibold">${itemName}</p>
                        <p class="text-xs text-gray-500">Qty: ${item.quantity}</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <span>₹ ${itemTotal.toFixed(2)}</span>
                        <button class="text-royal-blue remove-from-cart" data-item-name="${itemName}">x</button>
                    </div>
                `;
                basketItemsContainer.appendChild(basketItem);
            }

            subtotalElement.innerHTML = `₹ ${subtotal.toFixed(2)}`;
            totalElement.innerHTML = `₹ ${subtotal.toFixed(2)}`;

            // Add event listeners to remove buttons
            document.querySelectorAll('.remove-from-cart').forEach(button => {
                button.addEventListener('click', (e) => {
                    const itemName = e.target.dataset.itemName;
                    delete basket[itemName];
                    updateBasket();
                });
            });
        }
        
        clearBasketButton.addEventListener('click', () => {
            basket = {};
            updateBasket();
        });

        // Initially hide extra items
        const extraItems = Array.from(itemCards).slice(9);
        extraItems.forEach(item => item.style.display = 'none');

        // Load more button functionality
        loadMoreBtn.addEventListener('click', () => {
            extraItems.forEach(item => item.style.display = 'flex');
            loadMoreBtn.style.display = 'none';
        });

        // Checkout modal functionality
        checkoutBtn.addEventListener('click', () => {
            modalBasketSummary.innerHTML = '';
            let subtotal = 0;
            for (const itemName in basket) {
                const item = basket[itemName];
                const itemTotal = item.price * item.quantity;
                subtotal += itemTotal;

                const basketItem = document.createElement('div');
                basketItem.classList.add('flex', 'justify-between', 'items-center', 'py-1');
                basketItem.innerHTML = `
                    <p class="text-sm">${itemName} (x${item.quantity})</p>
                    <span class="font-medium">₹ ${itemTotal.toFixed(2)}</span>
                `;
                modalBasketSummary.appendChild(basketItem);
            }
            const totalRow = document.createElement('div');
            totalRow.classList.add('flex', 'justify-between', 'items-center', 'font-bold', 'mt-2', 'border-t', 'pt-2');
            totalRow.innerHTML = `
                <p>Total</p>
                <span>₹ ${subtotal.toFixed(2)}</span>
            `;
            modalBasketSummary.appendChild(totalRow);

            checkoutModal.classList.remove('hidden');
        });

        closeModal.addEventListener('click', () => {
            checkoutModal.classList.add('hidden');
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