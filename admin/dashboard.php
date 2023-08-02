<?php
    require_once "../Config/config.php";
    if(isset($_SESSION['Email'])) {
?>

<!DOCTYPE html> 
<html>
    <head>
        <title>Administrator</title>
        <link rel="icon" href="IMG/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="CSS/styleDashboard.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                    <a href="dashboard.php">
                    <i class="bx bx-grid-alt"></i>
                    <span class="link_name">Dashboard</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>
                <li>
                    <a href="dataRT.php">
                    <i class="bx bx-user"></i>
                    <span class="link_name">Profil RT</span>
                    </a>
                    <span class="tooltip">Profil RT</span>
                </li>
                <li>
                    <a href="editWarga.php">
                    <i class="bx bx-folder"></i>
                    <span class="link_name">Data Warga</span>
                    </a>
                    <span class="tooltip">Data Warga</span>
                </li>
                <li>
                    <a href="editPesan.php">
                    <i class="bx bx-chat"></i>
                    <span class="link_name">Pesan</span>
                    </a>
                    <span class="tooltip">Pesan</span>
                </li>
                <li>
                    <a href="editBerita.php">
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
                        echo "<a href=\"../auth/logoutAdmin.php\">"
                    ?>
                    <i class="bx bx-log-out" id="log_out"></i>
                    <?php
                        "</a>";
                    ?>
                </div>
                <?php
                    echo "<a href=\"../auth/logoutAdmin.php\">"
                ?>
                <i class="bx bx-log-out" id="log_out"></i>
                <?php
                    echo "</a>";
                ?>
            </li>
            </ul>
        </div>

        <!-- CONTENT -->
        <section class="home-section">
            <div class="text">
                <div class="content">
                    <div class="cards">
                        <div class="card">
                            <div class="box">
                                <?php
                                    $query = "SELECT COUNT(*) AS Jumlah_Warga FROM warga";
                                    $jml_warga = mysqli_query($con, $query) or die (mysqli_error($con));
                                    if($jml_warga){
                                        $data = mysqli_fetch_assoc($jml_warga);
                                        $totalwarga = $data['Jumlah_Warga'];
                                    } else{
                                        $totalwarga = 0;
                                    }
                                ?>
                                <h1><?=$totalwarga?></h1>
                                <h3>Data Warga</h3>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-person"></i>
                            </div>
                        </div>
                        <div class="card">
                            <div class="box">
                                <?php
                                    $query = "SELECT COUNT(*) AS Kumpulan FROM berita";
                                    $jml_berita = mysqli_query($con, $query) or die (mysqli_error($con));
                                    if($jml_berita){
                                        $data = mysqli_fetch_assoc($jml_berita);
                                        $totalberita = $data['Kumpulan'];
                                    } else{
                                        $totalberita = 0;
                                    }
                                ?>
                                <h1><?=$totalberita?></h1>
                                <h3>Data Berita</h3>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-newspaper"></i>
                            </div>
                        </div>
                        <div class="card">
                            <div class="box">
                                <?php
                                    $query = "SELECT COUNT(*) AS Ketua_RT FROM rt";
                                    $jml_rt = mysqli_query($con, $query) or die (mysqli_error($con));
                                    if($jml_rt){
                                        $data = mysqli_fetch_assoc($jml_rt);
                                        $totalrt = $data['Ketua_RT'];
                                    } else{
                                        $totalrt = 0;
                                    }
                                ?>
                                <h1><?=$totalrt?></h1>
                                <h3>Data Ketua RT</h3>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-house-user"></i>
                            </div>
                        </div>
                        <div class="card">
                            <div class="box">
                                <?php
                                    $query = "SELECT COUNT(*) AS List_Ajuan FROM surat";
                                    $jml_surat = mysqli_query($con, $query) or die (mysqli_error($con));
                                    if($jml_surat){
                                        $data = mysqli_fetch_assoc($jml_surat);
                                        $totalsurat = $data['List_Ajuan'];
                                    } else{
                                        $totalsurat = 0;
                                    }
                                ?>
                                <h1><?=$totalsurat?></h1>
                                <h3>Data Permohonan</h3>
                            </div>
                            <div class="icon">
                                <i class="bx bx-chat"></i>
                            </div>
                        </div>
                    </div>

                    <div class="content-2">
                        <div class="warga">
                            <div class="title">
                                <h2>Data Warga</h2>
                                <a href="editWarga.php" class="btn">Lihat Semua</a>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>No. Hp</th>
                                        <th>Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                            $query = "SELECT Nama, Hp, Alamat FROM warga LIMIT 5";
                                            $sql_warga = mysqli_query($con, $query) or die (mysqli_error($con));
                                            if(mysqli_num_rows($sql_warga) > 0){
                                                while($data = mysqli_fetch_array($sql_warga)){
                                        ?>
                                                    <tr>
                                                        <td><?=$data['Nama']?></td>
                                                        <td><?=$data['Hp']?></td>
                                                        <td><?=$data['Alamat']?></td>
                                                    </tr>
                                        <?php
                                                }
                                            } else{
                                                echo "Data Warga Tidak Tersedia";
                                            }
                                        ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="desa">
                            <div class="title">
                                <h2>Data Ketua RT</h2>
                                <a href="editRT.php" class="btn">Lihat Detail</a>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                            $query = "SELECT Foto, Nama FROM rt";
                                            $sql_rt = mysqli_query($con, $query) or die (mysqli_error($con));
                                            if(mysqli_num_rows($sql_rt) > 0){
                                                while($data = mysqli_fetch_array($sql_rt)){
                                        ?>
                                                    <tr>
                                                        <td>
                                                            <?='<img src="data:image/jpeg;base64,'.base64_encode($data['Foto']).'"height="100" width="100"/>';?>
                                                        </td>
                                                        <td><?=$data['Nama']?></td>
                                                    </tr>
                                        <?php
                                                }
                                            } else{
                                                echo "Data RT Tidak Tersedia";
                                            }
                                        ?>
                                    </tr>
                                </tbody>
                            </table>  
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="js/scriptDashboard.js"></script>
    </body>
</html>
<?php
    } else{
        echo "<script>window.location='../auth/loginAdmin.php';</script>";
    }
?>