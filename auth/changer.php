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
        <meta charset="utf-8"/>
        <link rel="icon" href="IMG/favicon.png" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="CSS/styleCharger.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <script src="jquery.js"></script>
        <script src="js/scriptChanger.js"></script>
    </head>
    <body>
        <div class="Card">
            <div class="Card-content">
                <?php
                    $id = @$_GET['id'];
                    $sql_rt = mysqli_query($con, "SELECT * FROM rt WHERE ID = '$id'") or die (mysqli_error($con));
                    $data = mysqli_fetch_array($sql_rt);
                ?>
                <div class="Card-title">
                    <h2>-- WELCOME --</h2>
                    <h3><b><?=$data['Nama']?></b></h3>
                    <div class="underline-title"></div>
                </div>
                <div class="profil">
                    <img id="preview" width="50%">
                </div>
                <form action="prosesChange.php" method="POST" class="form" enctype="multipart/form-data">

                    <label for="Foto" class="label-upload" style="padding-top: 27px;">&nbsp;
                        <i class="fa-solid fa-camera"></i>
                        <button type="hidden" name="id" class="upload" value="<?=$data['ID']?>">Upload Foto Profil
                            <input type="file" id="Foto" name="Foto" accept="image/*" onchange="tampilkanGambar(event)" required>
                        </button>
                        <div class="form-border"></div>
                    </label>

                    <label for="RT" style="padding-top: 7px;">&nbsp;<i class="fa-solid fa-house"></i>
                        <input type="text" id="RT" class="form-content" name="RT" value="<?=$data['RT']?>" placeholder="ex : RT tahap 1" required>
                        <div class="form-border"></div>
                    </label>

                    <label for="Nama" style="padding-top: 7px;">&nbsp;<i class="fa-sharp fa-solid fa-address-card"></i>
                        <input type="hidden" name="id" value="<?=$data['ID']?>">
                        <input type="text" id="Nama" class="form-content" name="Nama" value="<?=$data['Nama']?>" placeholder="ex : Alexander Budi" required>
                        <div class="form-border"></div>
                    </label>

                    <label for="Hp" style="padding-top: 7px;">&nbsp;<i class="fa-solid fa-phone"></i>
                        <input type="text" id="Hp" class="form-content" name="Hp" value="<?=$data['Hp']?>" placeholder="ex : 08123456789" required>
                        <div class="form-border"></div>
                    </label>

                    <label for="Email" style="padding-top: 7px;">&nbsp;<i class="fa-solid fa-envelope"></i>
                        <input type="email" id="Email" class="form-content" name="Email" value="<?=$data['Email']?>" placeholder="ex : huhu@hehe.com" required>
                        <div class="form-border"></div>
                    </label>

                    <label for="Alamat" style="padding-top: 7px;">&nbsp;<i class="fa-solid fa-location-dot"></i>
                        <input id="Alamat" id="Alamat" class="form-content" name="Alamat" value="<?=$data['Alamat']?>" placeholder="ex : Jl. in aja, Dusun 2 Suka Maju" required></input>
                        <div class="form-border"></div>
                    </label>

                    <label for="Password" style="padding-top: 7px;">&nbsp;<i class="fa-solid fa-key"></i>
                        <input type="password" id="Password" class="form-content" name="Password" value="<?=$data['Password']?>" placeholder="ex : jonoDusun" required>
                        <span class="show-hide">
                            <i class="fa-solid fa-eye" id="unhide"></i>
                        </span>
                        <div class="form-border"></div>
                    </label>
                    <div class="btn-set">
                        <a href="loginAdmin.php" id="submit-btn" class="cancel">Cancel</a>
                        <input id="submit-btn" type="submit" name="edit" value="Simpan">
                    </div>
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