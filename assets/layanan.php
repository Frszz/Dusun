<?php
    require_once "../Config/config.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DUSUN 2 SUKAMAJU</title>
        <link rel="icon" href="IMG/favicon.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="CSS/styleLayanan.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    </head>
    <body> 
            <!-- NAVIGATION BAR (Start) -->
                <header>
                    <a href="beranda.php" class="logo"><img src="IMG/footer.jpg" alt=""/></i><span>DUSUN 2 SUKAMAJU</span></a>
                    <nav class="navbar">
                        <ul>
                            <li><a href="beranda.php">BERANDA</a></li>
                            <li><a href="profil.php">PROFIL</a>
                                <ul class="dropdown">
                                    <li><a href="profil.php#SEJARAH">SEJARAH DESA</a></li>
                                    <li><a href="profil.php#PETA">PETA DESA</a></li>
                                    <li><a href="profil.php#VIMI">VISI & MISI</a></li>
                                </ul>
                            </li>
                            <li><a href="berita.php">BERITA</a></li>
                            <li><a href="lembaga.php">LEMBAGA</a>
                                <ul class="dropdown">
                                    <li><a href="lembaga.php#STRUKTUR">STRUKTUR DESA</a></li>
                                    <li><a href="lembaga.php#STATISTIK">STATISTIK DESA</a></li>
                                </ul>
                            <li><a href="layanan.php" class="active">LAYANAN</a></li>
                        </ul>
                    </nav>
                    <div class="bx bx-menu" id="menu-icon"></div>
                </header>
            <!-- NAVIGATION BAR (End) -->

            <!-- Content (Start) -->
            <form method="POST" action="prosesForm.php">
                <div class="wrapper">
                    <div class="title">
                        Permohonan Surat
                    </div>
                    <div class="form">
                        <div class="input_field">
                            <label for="Nama">Nama Lengkap</label>
                            <input type="text" id="Nama" name="Nama" class="input" required autofocus>
                        </div>
                        <div class="input_field">
                            <label for="Email">Email</label>
                            <input type="text" id="Email" name="Email" class="input" required>
                        </div>
                        <div class="input_field">
                            <label for="Telp">Telepon</label>
                            <input type="text" id="Telp" name="Telp" class="input" required>
                        </div>
                        <div class="input_field">
                            <label for="Alamat">Alamat</label>
                            <textarea id="Alamat" name="Alamat" class="textarea" required></textarea>
                        </div>
                        <div class="input_field">
                            <label for="Jenis">Surat</label>
                            <div class="custom_select">
                                <?php
                                    echo "<select id=\"Jenis\" name=\"Jenis\">
                                        <option value=\"\" disabled selected style=\"display:none;\">Pilih Jenis Surat</option>";
                                        $query = mysqli_query($con, "SHOW COLUMNS FROM `surat` WHERE `field` = 'Nama_Surat'");
                                        while($data = mysqli_fetch_row($query)){
                                            foreach(explode("','",substr($data[1],6,-2)) as $option){
                                                echo "<option>".$option."</option>";
                                            }
                                        }
                                    echo "</select>";
                                ?>
                            </div>
                        </div>
                        <div class="input_field">
                            <label for="Pesan">Pesan</label>
                            <textarea id="Pesan" name="Pesan" class="textarea"></textarea>
                        </div>
                        <div class="input_field">
                            <input type="submit" value="Kirim" class="btn" name="submit">
                        </div>
                    </div>
                </div>
            </form>
            <!-- Content (End) -->

            <!-- FOOTER (Start) -->
            <footer class="footer">
                    <div class="footer-left">
                        <h3><b>Dusun 2 Sukamaju</b></h3>
                        <div class="logort">
                            <img src="IMG/footer.jpg" alt=""/>
                        </div>
                        <p class="copyright">2023 &copy Dusun 2 Sukamaju</p>
                    </div>

                    <div class="footer-center">
                        <div class="komponen">
                            <i class="fa fa-map-marker"></i>
                            <p><span>Deli Serdang, Sunggal</span>Sumatera Utara, Medan</p>
                        </div>
                        <div class="komponen">
                            <i class="fa fa-phone"></i>
                            <p><span>(+62) 896-5322-3729</span>(+62) 878-7899-2615</p>
                        </div>
                        <div class="komponen">
                            <i class="fa fa-envelope"></i>
                            <p><span><a href="mailto:faris230674@gmail.com">faris230674@gmail.com</a></span><a href="mailto:alditofayyadh0@gmail.com">alditofayyadh0@gmail.com</a></p>
                        </div>
                    </div>

                    <div class="footer-right">
                        <p class="footer-about">
                            <span>Tentang Kami</span>
                            Dusun bertugas membantu Kepala Desa dalam tugasnya. Kepala Dusun berfungsi untuk Pembinaan ketenteraman dan ketertiban, pelaksanaan upaya perlindungan masyarakat, dan penataan dan pengelolaan wilayah.
                        </p>
                        <div class="footer-media">
                            <a href="layanan.php"><i class="ri-inbox-archive-line"></i></a><span>Permohonan Surat</span>
                        </div>
                    </div>
                </footer>
            <!-- FOOTER (End) -->

        <script src="js/scriptLayanan.js"></script>
    </body>
</html>