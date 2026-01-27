document.addEventListener("DOMContentLoaded", () => {
  const loginForm = document.getElementById("loginForm");

  loginForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    // Hardcoded credentials for demo
    if (email === "admin@gmail.com" && password === "123456") {
      localStorage.setItem("loggedInUser", email); // STORE USER
      alert("Login Successful!");
      window.location.href = "dashboard.html"; // redirect to dashboard
    } else {
      alert("Invalid Email or Password");
    }
  });
});
