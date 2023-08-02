<?php
    require_once "../Config/config.php";
    if(isset($_SESSION['Email'])) {
        echo "<script>window.location='../admin/dashboard.php';</script>";
    } else {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DUSUN 2 SUKAMAJU</title>
        <meta charset="utf-8"/>
        <link rel="icon" href="IMG/favicon.png" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="CSS/styleRegister.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <script src="jquery.js"></script>
        <script src="js/scriptRegister.js"></script>
    </head>
    <body>
        <div id="Card">
            <div id="Card-content">
                <div id="Card-title">
                    <h2>REGISTER</h2>
                    <div class="underline-title"></div>
                </div>
                <?php
                    if(isset($_POST['Register'])){
                        $foto = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));
                        $rt = trim(mysqli_real_escape_string($con, $_POST['RT']));
                        $nama = trim(mysqli_real_escape_string($con, $_POST['Nama']));
                        $hp = trim(mysqli_real_escape_string($con, $_POST['Hp']));
                        $email = trim(mysqli_real_escape_string($con, $_POST['Email']));
                        $alamat = trim(mysqli_real_escape_string($con, $_POST['Alamat']));
                        $pass = trim(mysqli_real_escape_string($con, $_POST['Password']));
                        mysqli_query($con, "INSERT INTO rt (ID, Foto, RT, Nama, Hp, Email, Alamat, Password) VALUES ('', '$foto', '$rt','$nama', '$hp', '$email', '$alamat', '$pass')") or die (mysqli_error($con));
                        echo "<script>alert('Registrasi Berhasil Silahkan Login');
                        window.location='register.php';
                        </script>";
                    }
                ?>
                <div class="profil">
                    <img id="preview" width="50%">
                </div>
                <form method="POST" id="register-form" class="form" action="" enctype="multipart/form-data">

                    <label for="Foto" class="label-upload" style="padding-top: 27px;">&nbsp;
                        <i class="fa-solid fa-camera"></i>
                        <button type="button" for="Foto" class="upload">Upload Foto Profil
                            <input type="file" id="Foto" name="Foto" accept="image/*" onchange="tampilkanGambar(event)" required/>
                        </button>
                        <div class="form-border"></div>
                    </label>

                    <label for="RT" style="padding-top: 7px;">&nbsp;<i class="fa-solid fa-house"></i>
                        <input id="RT" class="form-content" type="text" name="RT" placeholder=" RT Tahap Berapa?" required/>
                        <div class="form-border"></div>
                    </label>

                    <label for="Nama" style="padding-top: 7px;">&nbsp;<i class="fa-sharp fa-solid fa-address-card"></i>
                        <input id="Nama" class="form-content" type="text" name="Nama" placeholder=" Masukkan Nama" required/>
                        <div class="form-border"></div>
                    </label>

                    <label for="Hp" style="padding-top: 7px;">&nbsp;<i class="fa-solid fa-phone"></i>
                        <input id="Hp" class="form-content" type="text" name="Hp" placeholder=" Masukkan Nomor Hp" required/>
                        <div class="form-border"></div>
                    </label>

                    <label for="Email" style="padding-top: 7px;">&nbsp;<i class="fa-solid fa-envelope"></i>
                        <input id="Email" class="form-content" type="Email" name="Email" placeholder=" Masukkan Email" required/>
                        <div class="form-border"></div>
                    </label>

                    <label for="Alamat" style="padding-top: 7px;">&nbsp;<i class="fa-solid fa-location-dot"></i>
                        <input id="Alamat" class="form-content" type="text" name="Alamat" placeholder=" Masukkan Alamat" required/>
                        <div class="form-border"></div>
                    </label>

                    <label for="Password" style="padding-top: 7px;">&nbsp;<i class="fa-solid fa-key"></i>
                    <input id="Password" class="form-content" type="password" placeholder=" Buat Password" name="Password" required/>
                    <span class="show-hide">
                        <i class="fa-solid fa-eye" id="unhide"></i>
                    </span>
                    <div class="form-border"></div>
                    </label>

                    <input id="submit-btn" type="submit" name="Register" value="Register">
                    <a href="loginAdmin.php" id="login">Sudah Punya Akun?</a>
                </form>
                <script>
                    const password = document.getElementById('Password');
                    const unhideButton = document.getElementById('unhide');
                    unhideButton.addEventListener('click', function(){
                        if(password.type === 'password'){
                            password.type = 'text';
                        } else{
                            password.type = 'password';
                        }
                    });
                </script>
            </div>
        </div>
    </body>
</html>
<?php
    }
?>