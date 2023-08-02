<?php
    require_once "../Config/config.php";
    if(isset($_SESSION['Email'])) {
        echo "<script>window.location='../admin/dashboard.php';</script>";
    } else {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ubah Data</title>
        <link rel="icon" href="IMG/favicon.png" type="image/x-icon">
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="CSS/styleAskChange.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <script src="jquery.js"></script>
        <script src="js/scriptAskChange.js"></script>
    </head>
    <body>
        <div id="Card">
            <div id="Card-content">
                <div id="Card-title">
                    <h3>Mau Ubah Data?</h3>
                    <div class="underline-title"></div>
                </div>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $rt = trim(mysqli_real_escape_string($con, $_POST['RT']));
                        $email = trim(mysqli_real_escape_string($con, $_POST['Email']));
                        $pass = trim(mysqli_real_escape_string($con, $_POST['Password']));
                        $query = "SELECT * FROM rt WHERE RT = '$rt' AND Email = '$email' AND Password = '$pass'";
                        $result = mysqli_query($con, $query) or die (mysqli_error($con));
                        if (mysqli_num_rows($result) > 0) {
                            $data = mysqli_fetch_array($result);
                            echo "<script>window.location='changer.php?id=".$data['ID']."';</script>";
                        } else {
                        echo 'Data Yang Anda Masukkan Tidak Terdaftar Dalam Sistem';
                        }
                    }
                ?>
                <form method="POST" action="">
                    <label for="RT" style="padding-top: 13px;">&nbsp;<i class="fa-solid fa-house"></i>
                    <input id="RT" class="form-content" type="text" name="RT" placeholder=" Wilayah RT" required autofocus/>
                    <div class="form-border"></div>
                    </label>

                    <label for="Email" style="padding-top: 22px;">&nbsp;<i class="fa-solid fa-envelope"></i>
                    <input id="Email" class="form-content" type="email" placeholder=" Masukkan Email" name="Email" required/>
                    <div class="form-border"></div>
                    </label>

                    <label for="Password" style="padding-top: 22px;">&nbsp;<i class="fa-solid fa-key"></i>
                    <input id="Password" class="form-content" type="password" placeholder=" Masukkan Password" name="Password" required/>
                    <span class="show-hide">
                        <i class="fa-solid fa-eye" id="unhide"></i>
                    </span>
                    <div class="form-border"></div>
                    </label>

                    <input id="submit-btn" type="submit" value="Submit">
                    <p class="try"><a href="loginAdmin.php" class="back">Halaman Login</a></p>
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