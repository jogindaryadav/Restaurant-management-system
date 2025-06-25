@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>

<div class="max-w-7xl mx-auto px-4 py-12 grid lg:grid-cols-2 gap-10 items-center relative">
  <!-- Left Content -->
  <div class="space-y-6">
    <h1 class="text-4xl font-extrabold text-gray-800">
      <span class="block">Let's Enjoy Your</span>
      Trip At <span class="text-pink-600 typed-words">UNIQUR RESTAURANT</span>
    </h1>

    <!-- Form -->
    <form class="space-y-4">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Destination -->
        <select class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-500">
          <option>Table 1</option>
          <option>Table 2</option>
          <option>Table 3</option>
          <option>Table 4</option>
          <option>Table 5</option>
          <option>Table 6</option>
          <option>Table 7</option>
          <option>Table 8</option>
        </select>

        <!-- Calendar Date Range -->
        <input type="text" id="dateRange" placeholder="Select Date Range"
          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-500" />

        <!-- People -->
        <input type="text" placeholder="# of People"
          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-500" />
      </div>

      <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <!-- Submit Button -->
        <input type="submit" value="Search"
          class="bg-pink-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-pink-700 cursor-pointer transition" />

        <!-- Checkbox -->
        <label class="inline-flex items-center space-x-2">
          <input type="checkbox" class="form-checkbox text-pink-600" checked />
          <span class="text-gray-700">Save this search</span>
        </label>
      </div>
    </form>
  </div>
</div>
@endsection