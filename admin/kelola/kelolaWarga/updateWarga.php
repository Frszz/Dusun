<?php
    require_once "../../../Config/config.php";
    if(isset($_SESSION['Email'])) {
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Warga</title>
        <link rel="icon" href="../../IMG/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="CSS/styleUpdateWarga2.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
         <!-- SIDE BAR -->
         <div class="sidebar">
            <div class="logo_details">
                <i class="bx bxl-audible icon"></i>
                <div class="logo_name">Manage</div>
                <i class="bx bx-menu" id="btn"></i>
            </div>
            <ul class="nav-list">
                <li>
                    <i class="bx bx-search"></i>
                    <input type="text" placeholder="Search...">
                    <span class="tooltip">Search</span>
                </li>
                <li>
                    <a href="../../dashboard.php">
                    <i class="bx bx-grid-alt"></i>
                    <span class="link_name">Dashboard</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>
                <li>
                    <a href="../../dataRT.php">
                    <i class="bx bx-user"></i>
                    <span class="link_name">Profil RT</span>
                    </a>
                    <span class="tooltip">Profil RT</span>
                </li>
                <li>
                    <a href="../../editWarga.php">
                    <i class="bx bx-folder"></i>
                    <span class="link_name">Data Warga</span>
                    </a>
                    <span class="tooltip">Data Warga</span>
                </li>
                <li>
                    <a href="../../editPesan.php">
                    <i class="bx bx-chat"></i>
                    <span class="link_name">Pesan</span>
                    </a>
                    <span class="tooltip">Pesan</span>
                </li>
                <li>
                    <a href="../../editBerita.php">
                        <i class="bx bx-news"></i>
                        <span class="link_name">Berita</span>
                    </a>
                    <span class="tooltip">Berita</span>
                </li>
            <li class="profile">
                <div class="profile">
                    <div class="profile_details">
                        <img src="IMG/footer.jpg" alt="profile image">
                        <div class="profile_content">
                            <div class="designation">Admin</div>
                        </div>
                    </div>
                    <?php
                        echo "<a href=\"../../../auth/logoutAdmin.php\">"
                    ?>
                    <i class="bx bx-log-out" id="log_out"></i>
                    <?php
                        "</a>";
                    ?>
                </div>
                <?php
                    echo "<a href=\"../../../auth/logoutAdmin.php\">"
                ?>
                <i class="bx bx-log-out" id="log_out"></i>
                <?php
                    echo "</a>";
                ?>
            </li>
            </ul>
        </div>

        <!-- CONTENT -->
        <div class="container">
            <div class="element">
                <h1>Warga</h1>
                <div class="edit">
                    <p>Edit Warga</p>
                    <div class="fungsi">
                        <a href="../../editWarga.php">Kembali</a>
                    </div>
                </div>
                <div class="content"> 
                    <?php
                        $id = @$_GET['id'];
                        $sql_warga = mysqli_query($con, "SELECT * FROM warga WHERE ID = '$id'") or die (mysqli_error($con));
                        $data = mysqli_fetch_array($sql_warga);
                    ?>
                    <form action="prosesWarga.php" method="POST">
                        <div>
                            <label for="Nama">Nama Warga</label>
                            <input type="hidden" name="id" value="<?=$data['ID']?>">
                            <input type="text" id="Nama" name="Nama" value="<?=$data['Nama']?>" placeholder="Masukkan Nama..." required autofocus>
                        </div>
                        <div>
                            <label for="Hp">No. Hp</label>
                            <input type="text" id="Hp" name="Hp" value="<?=$data['Hp']?>" placeholder="Masukkan Nomor Telepon..." required>
                        </div>
                        <div>
                            <label for="Email">E-mail</label>
                            <input type="email" id="Email" name="Email" value="<?=$data['Email']?>" placeholder="Masukkan E-mail..." required>
                        </div>
                        <div>
                            <label for="Alamat">Alamat</label>
                            <input id="Alamat" name="Alamat" value="<?=$data['Alamat']?>" placeholder="Masukkan Alamat..." required>
                        </div>
                        <div class="tmbl1">
                            <input type="submit" name="edit" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="js/scriptUpdateWarga.js"></script>
    </body>
</html>
<?php
    } else{
        echo "<script>window.location='../../../auth/loginAdmin.php';</script>";
    }
?>