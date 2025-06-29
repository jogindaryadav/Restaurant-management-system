@extends('layouts.app')

@section('content')
<style>
    .hidden { display: none; }
  </style>

<div class="dark:bg-black dark:text-white item-center flex justify-center min-h-screen bg-gray-100">
  <div class="bg-gradient-to-r from-[#b34480] to-[#5e2b70]  dark:bg-gray-800 p-6 rounded-xl shadow-lg w-full max-w-md my-[5vh]">
    <h2 class="text-2xl font-bold text-center mb-6">Register</h2>

    <!-- Step 1: Gmail input -->
    <div id="step-email">
      <label for="email" class="block text-sm font-medium mb-2">Gmail Address</label>
      <input type="email" id="email" class="w-full p-2 border rounded mb-4" placeholder="you@gmail.com" required />

      <button onclick="sendEmailOTP()" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
        Send OTP
      </button>

      <p class="text-sm text-center mt-4">
        Already registered?
        <a href="{{ route('login') }}" onclick="redirectToLogin()" class="text-blue-600 hover:underline">Login here</a>
      </p>
    </div>

    <!-- Step 2: OTP input -->
    <div id="step-otp" class="hidden">
      <label for="otp" class="block text-sm font-medium mb-2">Enter OTP</label>
      <input type="text" id="otp" class="w-full p-2 border rounded mb-4" placeholder="6-digit OTP" required />

      <button onclick="verifyOTP()" class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
        Verify OTP
      </button>
    </div>

    <!-- Step 3: Set password -->
    <div id="step-password" class="hidden">
      <label for="password" class="block text-sm font-medium mb-2">Set Password</label>
      <input type="password" id="password" class="w-full p-2 border rounded mb-4" placeholder="Minimum 8 characters" required />

      <button onclick="setPassword()" class="w-full bg-purple-600 text-white py-2 rounded hover:bg-purple-700">
        Set Password & Go to Home
      </button>
    </div>
  </div>
</div> 
@endsection
