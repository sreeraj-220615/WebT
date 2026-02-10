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
document.getElementById("uploadForm").onsubmit = function(e){
    e.preventDefault();

    let formData = new FormData(this);
    let xhr = new XMLHttpRequest();

    xhr.upload.onprogress = function(e){
        let percent = (e.loaded/e.total)*100;
        document.getElementById("progress").style.width = percent + "%";
    };

    xhr.onload = function(){
        alert("Upload Successful");
        location.reload();
    };

    xhr.open("POST","upload_ajax.php",true);
    xhr.send(formData);
};

// Search Function
document.getElementById("search").onkeyup = function(){
    let value = this.value.toLowerCase();
    let rows = document.querySelectorAll("#fileTable tr");

    rows.forEach((row,i)=>{
        if(i===0) return;
        row.style.display =
            row.innerText.toLowerCase().includes(value) ? "" : "none";
    });
};
