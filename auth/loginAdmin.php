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
        <link rel="stylesheet" type="text/css" href="CSS/styleLoginAdmin.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <script src="jquery.js"></script>
        <script src="js/scriptLoginAdmin.js"></script>
    </head>
    <body>
        <div id="Card">
            <div id="Card-content">
                <div id="Card-title">
                    <h2>LOGIN</h2>
                    <div class="underline-title"></div>
                </div>
                <?php
                    if(isset($_POST['Login'])) {
                        $email = trim(mysqli_real_escape_string($con, $_POST['Email']));
                        $pass = trim(mysqli_real_escape_string($con, $_POST['Password']));
                        $sql_login = mysqli_query($con, "SELECT * FROM rt WHERE Email = '$email' AND Password = '$pass'") or die (mysqli_error($con));
                        if(mysqli_num_rows($sql_login) > 0){
                            $_SESSION['Email'] = $email;
                            echo "<script>window.location='../admin/dashboard.php';</script>";
                        } else{ ?>
                            <div class="login-rejected" id="login-rejected">
                                <button onclick="closeDiv()">X</button>
                                <p class="failed-1"><strong>Login Gagal</strong></p>
                                <p class="failed-2">Email / Password salah</p>
                            </div>
                        <?php
                        }
                    }
                ?>
                <form method="post" id="login-form" class="form" action="">
                    <label for="Email" style="padding-top: 13px;">&nbsp;<i class="fa-solid fa-envelope"></i>
                    <input id="Email" class="form-content" type="email" name="Email" placeholder=" Masukkan E-mail" required autofocus/>
                    <div class="form-border"></div>
                    </label>

                    <label for="Password" style="padding-top: 22px;">&nbsp;<i class="fa-solid fa-key"></i>
                    <input id="Password" class="form-content" type="password" placeholder=" Masukkan Password" name="Password" required/>
                    <span class="show-hide">
                        <i class="fa-solid fa-eye" id="unhide"></i>
                    </span>
                    <div class="form-border"></div>
                    </label>

                    <a href="forgotPass.php">
                        <legend id="forgot-pass">Lupa Password?</legend>
                    </a>
                    <input id="submit-btn" type="submit" name="Login" value="LOGIN">
                    <a href="register.php" id="signup" class="back">Belum Punya Akun?</a> 
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
