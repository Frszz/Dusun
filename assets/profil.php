<?php
    require_once "../Config/config.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DUSUN 2 SUKAMAJU</title>
        <link rel="icon" href="IMG/favicon.png" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="CSS/styleProfil.css">
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
                        <li><a href="profil.php" class="active">PROFIL</a>
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
                        <li><a href="layanan.php">LAYANAN</a></li>
                    </ul>
                </nav>
                <div class="bx bx-menu" id="menu-icon"></div>
            </header>
        <!-- NAVIGATION BAR (End) -->

        <!-- CONTENT (Start) -->
            <div class="wrapper">
                <section class="" id="BERANDA">
                    <img src="IMG/nanem.png">
                    <div class="kolom">
                        <p class="deskripsi">Dusun 2 Sukamaju</p>
                        <h2 class="h2-title">Rukun Tetangga</h2>
                        <p>Rukun Tetangga adalah pembagian wilayah di Indonesia di bawah Rukun Warga. pembentukannya adalah melalui musyawarah masyarakat setempat dalam rangka pelayanan kemasyarakatan yang ditetapkan oleh Desa atau Kelurahan.</p>
                        <p>Membantu menjalankan tugas pelayanan kepada masyarakat yang menjadi tanggungjawab Pemerintah. Memelihara kerukunan hidup warga. Menyusun rencana dan melaksanakan pembangunan dengan mengembangkan aspirasi dan budaya masyarakat. Pengkoordinasian antar warga.</p>
                    </div>
                </section>

                <section id="SEJARAH">
                    <div class="kolom">
                        <h2 class="h2-title">Sejarah Desa</h2>
                        <p>Desa adalah pemukiman atau komunitas manusia yang berkelompok, lebih besar dari dusun tetapi lebih kecil dari kota, dengan populasi biasanya berkisar dari beberapa ratus hingga beberapa ribu. Meskipun desa sering terletak di daerah pedesaan, istilah desa perkotaan juga diterapkan pada lingkungan perkotaan tertentu</p>
                        <p>Kecamatan medan sunggal berasal dari nama kerajaan "sunggal serba nyaman" yang sebelumnya bernama sunggal yaitu sebuah kampung yang didirikan oleh Datuk Aidir Surbakti di daerah Sembuaikan di kaki gunung Sibayak, kemudian  Datuk Abdullah Ahmad Surbakti pada tahun 1845 memindahkan pusat pemerintahan ke sunggal yang sekarang berada di sekitar Jl.PAM Tirtanadi Kecamatan Medan Sunggal.</p>
                        <p>Suka Maju merupakan salah satu desa yang ada di kecamatan Sunggal, Kabupaten Deli Serdang, provinsi Sumatra Utara, Indonesia. Berbatasan dengan desa Sei Mencirim, Sei Beras Sekata, dan Medan Krio. Desa Sukamaju memiliki 7 dusun dan 1 diantaranya merupakan dusun eksklave yaitu dusun Purwojoyo.</p>
                        <p><a href="https://id.wikipedia.org/wiki/Suka_Maju,_Sunggal,_Deli_Serdang" class="tmbl-2">Detail Lebih Lanjut</a></p>
                    </div>
                    <img src="IMG/tugu.png">
                </section>

                <section id="PETA">
                    <div class="tengah">
                        <h2 class="h2-title">Peta Desa</h2>
                        <div class="map-wrapper">
                            <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.1438787637535!2d98.58264404533615!3d3.5543001587292333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312f415436f87f%3A0xbb408de568851bb1!2sKomplek%20Sukamaju%20Indah!5e0!3m2!1sid!2sid!4v1688372653383!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="kolom-1">
                            <p>Komplek Sukamaju Indah</p>
                            <p>Tj. Selamat, Kec. Sunggal, Kabupaten Deli Serdang, Sumatera Utara 20351</p>
                        </div>
                    </div>
                </section>

                <section id="VIMI">
                    <div class="cover">
                        <div class="box-2">
                            <img src="IMG/arc.png" class="img-vm"/>
                            <h2 class="vm">Visi</h2>
                            <p>"DESA SUKAMAJU YANG BERTAQWA, BERDAYA, MANDIRI, DAN MAJU SEJAHTERA"</p>
                        </div>
                        <div class="box-2">
                            <img src="IMG/arc.png" class="img-vm"/>
                            <h2 class="vm">Misi</h2>
                            <p>1. Meningkatkan Perekonomian Masyarakat Desa Sukamaju</p>
                            <p>2. Meningkatkan Pelayanan Berkualitas Prima</p>
                            <p>3. Meningkatkan Tata Kelola Kegiatan Desa Sukamaju</p>
                        </div> 
                    </div>
                </section>
            </div>
        <!-- CONTENT (End) -->

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

        <script type="text/javascript" src="js/scriptProfil.js"></script>
    </body>
</html>

