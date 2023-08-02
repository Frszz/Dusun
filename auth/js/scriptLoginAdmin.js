document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah formulir dikirim secara langsung
  
    var Uname = document.getElementById("Email").value;
    var Pw = document.getElementById("Password").value;
    var username = '<?php echo $email; ?>';
    var pass = '<?php echo $pass; ?>';
  
    // Lakukan validasi login
    if (Uname === username && Pw === pass) {
      window.location.href = "../dashboard.php"; // Redirect ke halaman dashboard jika login berhasil
    } else {
      alert("Email atau Password Salah!"); // Tampilkan pesan kesalahan jika login gagal
    }
});

function closeDiv() {
  document.getElementById("login-rejected").style.display = "none";
}