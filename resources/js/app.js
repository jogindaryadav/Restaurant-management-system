// const searchInput = document.getElementById("searchInput");
// const items = document.querySelectorAll(".item-card");

// searchInput.addEventListener("input", function(){
//     const searchTerm = this.value.toLowerCase();

//     items.forEach(item =>{
//         const itemName = item.querySelector('.item-Name').textContent.toLowerCase();
//         if(itemName.include(searchTerm)){
//             item.classList.remove("hidden");
//         }
//         else{
//             item.classList.add("hidden");
//         }

//     });
// });

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
    // js code for register page
    
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
    
    // Code for reservation page
        const layout = [
      [null, 1, null, 2, null, 3, null],
      [4, null, 5, null, 6, null, 7],
      [null, null, null, null, null, null, null],
      [8, null, 9, null, 10, null, 11],
      [null, 12, null, 13, null, 14, null],
    ];

    let reservations = {};
    let selectedTable = null;

    function getKey() {
      const date = document.getElementById("reservationDate").value;
      const time = document.getElementById("reservationTime").value;
      return `${date}_${time}`;
    }

    function renderTables() {
      const key = getKey();
      const reserved = reservations[key] || [];
      const layoutContainer = document.getElementById("tableLayout");
      layoutContainer.innerHTML = "";

      layout.forEach(row => {
        row.forEach(cell => {
          const div = document.createElement("div");

          if (cell === null) {
            div.className = "seat empty";
          } else {
            div.className = "seat";
            div.textContent = cell;
            if (reserved.includes(cell)) {
              div.classList.add("reserved");
            } else if (selectedTable === cell) {
              div.classList.add("selected");
            } else {
              div.onclick = () => {
                selectedTable = cell;
                alert(`Table ${cell} selected`);
                renderTables();
              };
            }
          }

          layoutContainer.appendChild(div);
        });
      });

      const date = document.getElementById("reservationDate").value;
      const time = document.getElementById("reservationTime").value;
      const people = document.getElementById("peopleCount").value;

      if (date && time) {
        document.getElementById("availabilityInfo").textContent =
          `Available tables for ${people} person(s) on ${date} at ${time}. Click a table to reserve.`;
      }
    }

    function submitReservation() {
      const date = document.getElementById("reservationDate").value;
      const time = document.getElementById("reservationTime").value;

      if (!date || !time) {
        alert("Please select both date and time.");
        return;
      }

      renderTables();
    }

    window.onload = () => {
      const today = new Date().toISOString().split("T")[0];
      document.getElementById("reservationDate").value = today;
    };

// js code for searchbar
     const searchInput = document.getElementById("searchInput");
  const cards = document.querySelectorAll(".item-card");

  searchInput.addEventListener("input", function () {
    const query = searchInput.value.toLowerCase();

    cards.forEach((card) => {
      const itemName = card.querySelector(".item-name")?.textContent.toLowerCase();
      if (!query || (itemName && itemName.includes(query))) {
        card.style.display = "flex"; // show
      } else {
        card.style.display = "none"; // hide
      }
    });
  });

  // hamburger
  const menuToggle = document.getElementById("menuToggle");
  const dropdownMenu = document.getElementById("dropdownMenu");

  menuToggle.addEventListener("click", () => {
    dropdownMenu.classList.toggle("hidden");
    dropdownMenu.classList.toggle("flex");
    dropdownMenu.classList.toggle("flex-col");
  });