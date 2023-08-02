<?php
    require_once "../../../Config/config.php";
    if(isset($_SESSION['Email'])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Berita</title>
        <link rel="icon" href="../../IMG/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="CSS/styleInsertBerita2.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
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
            <h1>Berita</h1>
                <div class="edit">
                    <p>Tambah Berita</p>
                    <div class="fungsi">
                        <a href="../../editBerita.php">Kembali</a>
                    </div>
                </div>
                <div class="content">
                    <form action="prosesBerita.php" method="POST" enctype="multipart/form-data">
                        <div>
                            <label for="Judul">Judul</label>
                            <input type="text" id="Judul" name="Judul" placeholder="Masukkan Judul..." required autofocus>
                        </div>
                        <div>
                            <label for="Kategori">Kategori</label>
                            <?php
                                echo "<select id=\"Kategori\" name=\"Kategori\">
                                    <option value=\"\" disabled selected style=\"display:none;\"></option>";
                                    $category = mysqli_query($con, "SHOW COLUMNS FROM `berita` WHERE `field` = 'Kategori'");
                                    while($result = mysqli_fetch_row($category)){
                                        foreach(explode("','",substr($result[1],6,-2)) as $option){
                                            echo "<option>".$option."</option>";
                                        }
                                    }
                                echo "</select>";
                            ?>
                        </div>
                        <div>
                            <label for="Gambar">Gambar</label>
                            <input type="file" name="Gambar" class="image" required>
                        </div>
                        <div>
                            <label for="Deskripsi">Deskripsi</label>
                            <textarea id="Deskripsi" name="Deskripsi" rows="3" cols="6" required></textarea>
                            <script>
                                    CKEDITOR.replace( 'Deskripsi' );
                            </script>
                        </div>
                        <div>
                            <label for="Author">Author</label>
                            <input type="text" id="Author" name="Author" placeholder="Nama Pengarang..." required>
                        </div>
                        <div>
                            <label for="Tanggal">Tanggal</label>
                            <input type="date" id="Tanggal" name="Tanggal" required>
                        </div>
                        <div class="tmbl1">
                            <input type="submit" name="add" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/scriptInsertBerita.js"></script>
        <script src="js/scriptCustom.js"></script>

    </body>
</html>
<?php
    } else{
        echo "<script>window.location='../../../auth/loginAdmin.php';</script>";
    }
?>