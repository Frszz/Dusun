<?php
    require_once "../Config/config.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DUSUN 2 SUKAMAJU</title>
        <meta charset="utf-8">
        <link rel="icon" href="IMG/favicon.png" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="CSS/styleLembaga.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" charset="utf-8"></script>
    </head>
    <body>
        <!-- NAVIGATION BAR -->
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
                        <li><a href="lembaga.php" class="active">LEMBAGA</a>
                            <ul class="dropdown">
                                <li><a href="lembaga.php#STRUKTUR">STRUKTUR DESA</a></li>
                                <li><a href="lembaga.php#STATISTIK">STATISTIK DESA</a></li>
                            </ul>
                        <li><a href="layanan.php">LAYANAN</a></li>
                    </ul>
                </nav>
                <div class="bx bx-menu" id="menu-icon"></div>
            </header>

        <!-- CONTENT -->
            <section class="struct" id="STRUKTUR">
                <div class="container">
                    <div class="member">
                        <div class="header1">
                            <h1>Manajemen</h1>
                        </div>
                        <div class="content">
                            <?php
                                $query = "SELECT * FROM rt";
                                $result = mysqli_query($con, $query) or die(mysqli_error($con));
                                if(mysqli_num_rows($result) > 0){
                                    while($data = mysqli_fetch_array($result)){
                            ?>
                                        <div class="card">
                                            <?='<img src="data:image/jpeg;base64,'.base64_encode($data['Foto']).'"height="100px" width="100px"/>';?>
                                            <h4><?=$data['RT']?></h4>
                                            <hr>
                                            <p>NAMA : <?=$data['Nama']?></p>
                                            <p>EMAIL : <a href="mailto:<?=$data['Email']?>"><?=$data['Email']?></a></p>
                                        </div>
                            <?php
                                    }
                                } else{
                                    echo "Belum Ada Ketua RT nya";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="data" id="STATISTIK">
                <div class="header2">
                    <h1>DATA PENDUDUK</h1>
                </div>
                <?php
                    $warga = "SELECT COUNT(*) AS Jumlah_Warga FROM warga";
                    $jml_warga = mysqli_query($con, $warga) or die (mysqli_error($con));
                    if($jml_warga){
                        $data = mysqli_fetch_assoc($jml_warga);
                        $totalwarga = $data['Jumlah_Warga'];
                    } else{
                        $totalwarga = 0;
                    }
                ?>
                <div class="stk">
                    <h2>Tahun : <span id="tahun-sekarang"></span></h2>
                    <div class="jml-warga">
                        <p><?=$totalwarga?> Orang</p>
                        <img src="IMG/people.png">
                    </div>
                </div>
                <script>
                    var tahunSekarang = new Date().getFullYear();
                    document.getElementById("tahun-sekarang").textContent = tahunSekarang;
                </script>
            </section>

        <!-- FOOTER -->
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

        <script src="js/scriptLembaga.js"></script>
    </body>
</html>

