<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-sm text-center" id="login-box">

    <h2 class="text-2xl font-semibold mb-6">Login</h2>

    <input type="text" id="identifier" placeholder="Mobile Number"
      class="w-full px-4 py-2 border rounded-lg mb-4 focus:outline-none focus:ring focus:border-blue-300">

    <input type="password" id="password" placeholder="Password"
      class="w-full px-4 py-2 border rounded-lg mb-4 focus:outline-none focus:ring focus:border-blue-300">

    <button onclick="login()"
      class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Login</button>

    <div class="text-sm mt-4 text-blue-600 cursor-pointer" onclick="toggleLogin()">Use Gmail instead</div>

    <div class="text-sm mt-2 text-blue-500 hover:underline cursor-pointer" onclick="showForgot()">Forgot Password?</div>

    <div class="text-sm mt-2 text-blue-500 hover:underline cursor-pointer" id="registerPage"><a href="register.html">Register yet if not login?</a></div>
  </div>

  <!-- Forgot Password Modal -->
  <div class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden" id="forgot-box">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-sm text-center">
      <h3 class="text-lg font-semibold mb-4">Reset Password</h3>

      <input type="text" id="resetMobile" placeholder="Enter Mobile Number"
        class="w-full px-4 py-2 border rounded-lg mb-3 focus:outline-none focus:ring focus:border-blue-300">

      <button onclick="sendOTP()"
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

  <script>
    let useGmail = false;

    function toggleLogin() {
      const identifier = document.getElementById('identifier');
      const toggleText = document.querySelector('#login-box .text-sm.text-blue-600');
      useGmail = !useGmail;

      if (useGmail) {
        identifier.placeholder = "Gmail ID";
        toggleText.textContent = "Use Mobile Number instead";
      } else {
        identifier.placeholder = "Mobile Number";
        toggleText.textContent = "Use Gmail instead";
      }
    }

    function login() {
      const id = document.getElementById('identifier').value;
      const pw = document.getElementById('password').value;

      if (!id || !pw) {
        alert("Please enter all fields.");
        return;
      }

      alert(`Logging in with ${useGmail ? "Gmail" : "Mobile"}: ${id}`);
    }

    function showForgot() {
      document.getElementById('forgot-box').classList.remove('hidden');
    }

    function closeForgot() {
      document.getElementById('forgot-box').classList.add('hidden');
    }

    function sendOTP() {
      const mobile = document.getElementById('resetMobile').value;
      if (!mobile) {
        alert("Please enter your mobile number.");
        return;
      }

      // Simulated OTP send
      alert(`OTP sent to ${mobile}`);

      // Show OTP + New Password fields
      document.getElementById('otp').style.display = 'block';
      document.getElementById('newPassword').style.display = 'block';
      document.getElementById('resetBtn').style.display = 'block';
    }

    function resetPassword() {
      const otp = document.getElementById('otp').value;
      const newPass = document.getElementById('newPassword').value;

      if (!otp || !newPass) {
        alert("Please enter OTP and new password.");
        return;
      }

      // Simulated password reset
      alert("Password reset successful!");
      closeForgot();
    }
  </script>

</body>
</html>

