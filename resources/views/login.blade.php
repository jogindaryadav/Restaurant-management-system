@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen">
  <div class="w-full max-w-md p-8">
      <h2 class="text-3xl font-bold text-center mb-8 dark:text-white">Login</h2>

      <form action="#" method="POST">
        @csrf
        <div class="mb-4">
          <label for="identifier" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email or Mobile Number</label>
          <input type="text" id="identifier" name="identifier" required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white"
            placeholder="Enter your email or mobile number">
        </div>

        <div class="mb-6 relative">
          <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
          <input type="password" id="password" name="password" required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white"
            placeholder="Enter your password">
          <span class="absolute inset-y-0 right-0 flex items-center pr-3 pt-8 cursor-pointer" onclick="togglePasswordVisibility()">
            <i class="fa fa-eye text-gray-400" id="password-toggle-icon"></i>
          </span>
        </div>

        <div class="flex items-center justify-between mb-6">
          <div class="flex items-center">
            <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="remember" class="ml-2 block text-sm text-gray-900 dark:text-gray-300">Remember me</label>
          </div>
          <a href="#" class="text-sm text-blue-600 hover:underline dark:text-blue-400">Forgot Password?</a>
        </div>

        <button type="submit"
          class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">Login</button>

        <div class="text-center mt-6">
          <p class="text-sm text-gray-600 dark:text-gray-400">
            Don't have an account? <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:underline dark:text-blue-400">Register here</a>
          </p>
        </div>
      </form>
    </div>
</div>

<script>
  function togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    const passwordIcon = document.getElementById('password-toggle-icon');
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      passwordIcon.classList.remove('fa-eye');
      passwordIcon.classList.add('fa-eye-slash');
    } else {
      passwordInput.type = 'password';
      passwordIcon.classList.remove('fa-eye-slash');
      passwordIcon.classList.add('fa-eye');
    }
  }
</script>
@endsection