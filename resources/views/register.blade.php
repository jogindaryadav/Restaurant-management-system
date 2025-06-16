<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register with Gmail OTP</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .hidden { display: none; }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="bg-white p-6 rounded-xl shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold text-center mb-6">Register</h2>

    <!-- Step 1: Gmail input -->
    <div id="step-email">
      <label for="email" class="block text-sm font-medium mb-2">Gmail Address</label>
      <input type="email" id="email" class="w-full p-2 border rounded mb-4" placeholder="you@gmail.com" required />

      <button onclick="sendOTP()" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
        Send OTP
      </button>

      <p class="text-sm text-center mt-4">
        Already registered?
        <a href="login.html" onclick="redirectToLogin()" class="text-blue-600 hover:underline">Login here</a>
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

  <script>
    function sendOTP() {
      const email = document.getElementById("email").value.trim();
      if (!email.endsWith("@gmail.com")) {
        alert("Only Gmail addresses are allowed.");
        return;
      }

      // Simulate sending OTP
      alert("OTP sent to: " + email);
      document.getElementById("step-email").classList.add("hidden");
      document.getElementById("step-otp").classList.remove("hidden");
    }

    function verifyOTP() {
      const otp = document.getElementById("otp").value.trim();

      if (/^\d{6}$/.test(otp)) {
        alert("OTP verified successfully.");
        document.getElementById("step-otp").classList.add("hidden");
        document.getElementById("step-password").classList.remove("hidden");
      } else {
        alert("Invalid OTP. It should be a 6-digit number.");
      }
    }

    function setPassword() {
      const password = document.getElementById("password").value;

      if (password.length >= 8) {
        alert("Password set successfully!");
        // Simulate redirect to home page
        window.location.href = "index.html";
      } else {
        alert("Password must be at least 8 characters.");
      }
    }

    function redirectToLogin() {
      alert("Redirecting to login page...");
      // You can change this to: window.location.href = 'login.html';
    }
  </script>
</body>
</html>
