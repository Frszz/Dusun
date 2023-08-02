<?php
    require_once "../Config/config.php";
    if(isset($_SESSION['Email'])) {
        echo "<script>window.location='../admin/dashboard.php';</script>";
    } else {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lupa Password</title>
        <meta charset="utf-8"/>
        <link rel="icon" href="IMG/favicon.png" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="CSS/styleForgotPass.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <script src="jquery.js"></script>
        <script src="js/scriptForgotPass.js"></script>
    </head>
    <body>
        <div id="Card">
            <div id="Card-content">
                <div id="Card-title">
                    <h2>Lupa Password</h2>
                    <div class="underline-title"></div>
                </div>
                <?php
                    if(isset($_POST['Forgot'])){
                        $rt = trim(mysqli_real_escape_string($con, $_POST['RT']));
                        $email = trim(mysqli_real_escape_string($con, $_POST['Email']));
                        $sql_rt = mysqli_query($con, "SELECT * FROM rt WHERE RT = '$rt' AND Email = '$email'") or die (mysqli_error($con));
                        if(mysqli_num_rows($sql_rt) > 0){
                            while($data = mysqli_fetch_assoc($sql_rt)){
                                echo "<script>alert('Password Anda : ".$data['Password']."\\n\\nMohon Diingat Terlebih Dahulu Password Tersebut Sebelum Menekan Tombol \"Ok\"');
                                window.location='askChange.php';
                                </script>";
                            }
                        } else{
                            echo "<script>alert('Data Yang Anda Masukkan Salah');</script>";
                        }
                    }
                ?>
                <form method="POST" id="login-form" class="form" action="">

                    <label for="RT" style="padding-top: 13px;">&nbsp;<i class="fa-solid fa-house"></i>
                    <input id="RT" class="form-content" type="text" name="RT" placeholder=" Wilayah RT" required autofocus/>
                    <div class="form-border"></div>
                    </label>

                    <label for="Email" style="padding-top: 13px;">&nbsp;<i class="fa-solid fa-envelope"></i>
                    <input id="Email" class="form-content" type="email" placeholder=" Masukkan Email" name="Email" required/>
                    <div class="form-border"></div>
                    </label>

                    <input id="submit-btn" type="submit" name="Forgot" value="Cek">
                    <p class="try"><a href="loginAdmin.php" class="back">Kembali Login</a></p> 
                </form>
            </div>
        </div>
    </body>
</html>
<?php
    }
?>