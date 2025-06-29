@extends('layouts.app')

@section('content')

<div class="bg-gray-100 flex items-center justify-center min-h-screen dark:bg-black">

  <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-sm text-center dark:bg-gray-900" id="login-box">

    <h2 class="text-2xl font-semibold mb-6 dark:text-whitej">Login</h2>

    <input type="text" id="identifier" placeholder="Mobile Number"
      class="w-full px-4 py-2 border rounded-lg mb-4 focus:outline-none focus:ring focus:border-blue-300">

    <input type="password" id="password" placeholder="Password"
      class="w-full px-4 py-2 border rounded-lg mb-4 focus:outline-none focus:ring focus:border-blue-300">

    <button onclick="login()"
      class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Login</button>

    <div class="text-sm mt-4 text-blue-600 cursor-pointer" onclick="toggleLogin()">Use Gmail instead</div>

    <div class="text-sm mt-2 text-blue-500 hover:underline cursor-pointer" onclick="showForgot()">Forgot Password?</div>

    <div class="text-sm mt-2 text-blue-500 hover:underline cursor-pointer" id="registerPage"><a href="{{ route('register') }}">Register yet if not login?</a></div>
  </div>

  <!-- Forgot Password Modal -->
  <div class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center" id="forgot-box">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-sm text-center">
      <h3 class="text-lg font-semibold mb-4">Reset Password</h3>

      <input type="text" id="resetMobile" placeholder="Enter Mobile Number"
        class="w-full px-4 py-2 border rounded-lg mb-3 focus:outline-none focus:ring focus:border-blue-300">

      <button onclick="sendMobileOTP()"
        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition mb-3">Send OTP</button>

      <input type="text" id="otp" placeholder="Enter OTP"
        class="w-full px-4 py-2 border rounded-lg mb-3 focus:outline-none focus:ring focus:border-blue-300" style="display: none;">

      <input type="password" id="newPassword" placeholder="New Password"
        class="w-full px-4 py-2 border rounded-lg mb-3 focus:outline-none focus:ring focus:border-blue-300" style="display: none;">

      <button onclick="resetPassword()"
        class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition mb-3" style="display: none;" id="resetBtn">Reset Password</button>

      <div class="text-sm text-gray-600 cursor-pointer hover:underline" onclick="closeForgot()">Cancel</div>
    </div>
  </div>
</div>

@endsection


