const searchInput = document.getElementById("searchInput");
const items = document.querySelectorAll(".item-card");

searchInput.addEventListener("input", function(){
    const searchTerm = this.value.toLowerCase();

    items.forEach(item =>{
        const itemName = item.querySelector('.item-Name').textContent.toLowerCase();
        if(itemName.include(searchTerm)){
            item.classList.remove("hidden");
        }
        else{
            item.classList.add("hidden");
        }

    });
});

//login page
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