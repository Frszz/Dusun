<?php
    require_once "../Config/config.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DUSUN 2 SUKAMAJU</title>
        <link rel="icon" href="IMG/favicon.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="CSS/styleBerita.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
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
                        <li><a href="berita.php" class="active">BERITA</a></li>
                        <li><a href="lembaga.php">LEMBAGA</a>
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
        <div class="container">
            <div class="page-wrapper">
                <div class="post-slider">
                    <h1 class="slider-title">Berita Terhangat</h1>
                    <i class="ri-arrow-left-s-line prev"></i>
                    <i class="ri-arrow-right-s-line next"></i>
                    <div class="post-wrapper">
                        <?php
                            $query = "SELECT * FROM berita WHERE Kategori = 'Hot' LIMIT 5";
                            $result = mysqli_query($con, $query) or die (mysqli_error($con));
                            if($result){
                                while($data = mysqli_fetch_array($result)){
                        ?>
                                    <div class="post">
                                        <?='<img src="data:image/jpeg;base64,'.base64_encode($data['Gambar']).'"class="slider-image"/>';?>
                                        <div class="post-info">
                                                <h3><?=$data['Judul']?></h3>
                                                <h5><i class="ri-user-line"></i><?=$data['Author']?>&nbsp;
                                                <i class="ri-calendar-line"></i><?=$data['Tanggal']?></h5>
                                                <p><a href="NEWS/hot.php">Lihat Lainnya</a></p>
                                            </div>
                                    </div>
                        <?php
                                }
                            } else{
                                echo "Tidak Ada Berita Terhangat.";
                            }
                        ?>
                    </div>
                </div> 

                <div class="content clearfix">
                    <div class="main-content">
                        <h1 class="recent-post-title">Berita Terbaru</h1>
                        <?php
                            $query = "SELECT * FROM berita WHERE Kategori = 'New' LIMIT 3";
                            $result = mysqli_query($con, $query) or die (mysqli_error($con));
                            if(mysqli_num_rows($result) != 0){
                                while($data = mysqli_fetch_array($result)){
                        ?>
                                <div class="post">
                                    <?='<img src="data:image/jpeg;base64,'.base64_encode($data['Gambar']).'"class="post-image"/>';?>
                                    <div class="post-preview">
                                        <h2><a href=""><?=$data['Judul']?></a></h2>
                                        <h5><i class="ri-user-line"></i><?=$data['Author']?>&nbsp;
                                        <i class="ri-calendar-line"></i><?=$data['Tanggal']?></h5>
                                        <p class="preview-text"><?=$data['Deskripsi']?></p>
                                        <a href="NEWS/new.php" class="btn read-more">Lihat Lebih Banyak</a>
                                    </div>
                                </div>
                        <?php
                                }
                            } else{
                                echo "Tidak Ada Berita Terbaru";
                            }
                        ?>
                    </div>

                    <div class="sidebar">
                        <div class="section search">
                            <h2 class="section-title">Search</h2>
                            <from action="berita2.php" method="post">
                                <input type="text" name="search-term" class="text-input" placeholder="Search...">
                            </form>
                        </div>
                        <div class="section topics">
                            <h2 class="section-title">Topics</h2>
                            <ul>
                                <li><a href="NEWS/hot.php">Pembangunan</a></li>
                                <li><a href="NEWS/hot.php">Gotong Royong</a></li>
                                <li><a href="NEWS/hot.php">Festival</a></li>
                                <li><a href="NEWS/hot.php">Vaksin</a></li>
                                <li><a href="NEWS/hot.php">Hari Nasional</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <script type="text/javascript" src="js/scriptBerita.js"></script>
    </body>
</html>