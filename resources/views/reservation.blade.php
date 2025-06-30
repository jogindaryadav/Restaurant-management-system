@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>

<div class="flex flex-col lg:flex-row min-h-screen">
  <!-- Left Section: Reservation Form -->
  <div class="lg:w-1/2 p-8">
    <div class="space-y-6">
      <h1 class="text-4xl font-extrabold text-gray-800 dark:text-white">
        <span class="block">Let's Enjoy Your</span>
        party At <span class="text-pink-600">UNIQUE RESTAURANT</span>
      </h1>

      <!-- Form -->
      <form class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <!-- Destination -->
          <select id="table-select" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white">
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
            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white" />

          <!-- People -->
          <input type="text" placeholder="# of People"
            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white" />
        </div>

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
          <!-- Submit Button -->
          <input type="submit" value="Search"
            class="bg-pink-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-pink-700 cursor-pointer transition" />

          <!-- Checkbox -->
          <label class="inline-flex items-center space-x-2">
            <input type="checkbox" class="form-checkbox text-pink-600" checked />
            <span class="text-gray-700 dark:text-gray-300">Save this search</span>
          </label>
        </div>
      </form>
    </div>
  </div>

  <!-- Right Section: Seat Selection -->
  <div class="lg:w-1/2 p-8 flex items-center justify-center">
    <div class="w-full max-w-2xl">
      <h2 class="text-2xl font-bold text-center mb-8 dark:text-white">Select Your Seat</h2>
      <div class="svg-container">
        <svg viewBox="0 0 800 600" class="w-full h-full">
          <!-- Tables and Chairs -->
          <defs>
            <g id="chair-icon" transform="scale(1.5)">
              <path d="M2,2 L2,8 Q2,10 4,10 L10,10 Q12,10 12,8 L12,2 Z"></path>
              <path d="M0,12 L14,12 L14,14 L0,14 Z"></path>
              <path d="M2,10 L2,16 L4,16 L4,10 Z"></path>
              <path d="M10,10 L10,16 L12,16 L12,10 Z"></path>
            </g>
          </defs>
          <g class="table-group" data-table-id="1">
            <rect x="100" y="100" width="80" height="80" class="table" />
            <text x="140" y="145" class="booked-label">Booked</text>
            <use href="#chair-icon" x="130" y="70" class="chair" data-seat="1" />
            <use href="#chair-icon" x="130" y="190" class="chair" data-seat="2" />
          </g>
          <g class="table-group" data-table-id="2">
            <rect x="300" y="100" width="80" height="80" class="table" />
            <text x="340" y="145" class="booked-label">Booked</text>
            <use href="#chair-icon" x="330" y="70" class="chair" data-seat="3" />
            <use href="#chair-icon" x="330" y="190" class="chair" data-seat="4" />
          </g>
          <g class="table-group" data-table-id="3">
            <rect x="500" y="100" width="120" height="80" class="table" />
            <text x="560" y="145" class="booked-label">Booked</text>
            <use href="#chair-icon" x="510" y="70" class="chair" data-seat="5" />
            <use href="#chair-icon" x="550" y="70" class="chair" data-seat="6" />
            <use href="#chair-icon" x="590" y="70" class="chair" data-seat="7" />
            <use href="#chair-icon" x="510" y="190" class="chair" data-seat="8" />
            <use href="#chair-icon" x="550" y="190" class="chair" data-seat="9" />
            <use href="#chair-icon" x="590" y="190" class="chair" data-seat="10" />
          </g>
          <g class="table-group" data-table-id="4">
            <rect x="100" y="300" width="80" height="120" class="table" />
            <text x="140" y="365" class="booked-label">Booked</text>
            <use href="#chair-icon" x="70" y="330" class="chair" data-seat="11" />
            <use href="#chair-icon" x="190" y="330" class="chair" data-seat="12" />
            <use href="#chair-icon" x="70" y="370" class="chair" data-seat="13" />
            <use href="#chair-icon" x="190" y="370" class="chair" data-seat="14" />
          </g>
           <g class="table-group" data-table-id="5">
            <rect x="300" y="300" width="80" height="120" class="table" />
            <text x="340" y="365" class="booked-label">Booked</text>
            <use href="#chair-icon" x="270" y="330" class="chair" data-seat="15" />
            <use href="#chair-icon" x="390" y="330" class="chair" data-seat="16" />
            <use href="#chair-icon" x="270" y="370" class="chair" data-seat="17" />
            <use href="#chair-icon" x="390" y="370" class="chair" data-seat="18" />
          </g>
          <g class="table-group" data-table-id="6">
            <rect x="500" y="300" width="80" height="80" class="table" />
            <text x="540" y="345" class="booked-label">Booked</text>
            <use href="#chair-icon" x="530" y="270" class="chair" data-seat="19" />
            <use href="#chair-icon" x="530" y="390" class="chair" data-seat="20" />
          </g>
          <g class="table-group" data-table-id="7">
            <rect x="100" y="500" width="120" height="80" class="table" />
            <text x="160" y="545" class="booked-label">Booked</text>
            <use href="#chair-icon" x="110" y="470" class="chair" data-seat="21" />
            <use href="#chair-icon" x="150" y="470" class="chair" data-seat="22" />
            <use href="#chair-icon" x="190" y="470" class="chair" data-seat="23" />
            <use href="#chair-icon" x="110" y="590" class="chair" data-seat="24" />
            <use href="#chair-icon" x="150" y="590" class="chair" data-seat="25" />
            <use href="#chair-icon" x="190" y="590" class="chair" data-seat="26" />
          </g>
          <g class="table-group" data-table-id="8">
            <rect x="300" y="500" width="80" height="80" class="table" />
            <text x="340" y="545" class="booked-label">Booked</text>
            <use href="#chair-icon" x="330" y="470" class="chair" data-seat="27" />
            <use href="#chair-icon" x="330" y="590" class="chair" data-seat="28" />
          </g>
        </svg>
      </div>
    </div>
  </div>
</div>

<style>
  .table {
    fill: #a9a9a9;
    cursor: pointer;
    transition: fill 0.3s;
  }
  .table.booked {
    fill: #f44336;
  }
  .chair {
    fill: #4caf50;
    cursor: pointer;
    transition: fill 0.3s;
  }
  .chair.selected {
    fill: #f44336;
  }
  .booked-label {
    font-size: 20px;
    fill: white;
    text-anchor: middle;
    display: none;
  }
  .table.booked + .booked-label {
    display: block;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const chairs = document.querySelectorAll('.chair');
    const tableSelect = document.getElementById('table-select');
    const tableGroups = document.querySelectorAll('.table-group');

    chairs.forEach(chair => {
      chair.addEventListener('click', (event) => {
        event.stopPropagation();
        chair.classList.toggle('selected');
      });
    });

    tableGroups.forEach(tableGroup => {
      tableGroup.addEventListener('click', () => {
        const tableId = tableGroup.getAttribute('data-table-id');
        const table = tableGroup.querySelector('.table');
        const bookedLabel = tableGroup.querySelector('.booked-label');

        table.classList.toggle('booked');
        if (table.classList.contains('booked')) {
            bookedLabel.style.display = 'block';
        } else {
            bookedLabel.style.display = 'none';
        }

        // Sync with dropdown
        tableSelect.value = `Table ${tableId}`;
      });
    });

    tableSelect.addEventListener('change', () => {
        const selectedTableId = tableSelect.value.split(' ')[1];
        tableGroups.forEach(tableGroup => {
            const tableId = tableGroup.getAttribute('data-table-id');
            const table = tableGroup.querySelector('.table');
            const bookedLabel = tableGroup.querySelector('.booked-label');

            if (tableId === selectedTableId) {
                table.classList.add('booked');
                bookedLabel.style.display = 'block';
            } else {
                table.classList.remove('booked');
                bookedLabel.style.display = 'none';
            }
        });
    });
  });
</script>
@endsection