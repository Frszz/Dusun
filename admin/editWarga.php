<?php
    require_once "../Config/config.php";
    if(isset($_SESSION['Email'])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Warga</title>
        <link rel="icon" href="IMG/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="CSS/styleEditWarga2.css">
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
        <div class="container">
            <div class="element">
                <h1>Warga</h1>
                <div class="edit">
                    <p>Data Warga</p>
                    <div class="fungsi">
                        <a href="" class="refresh"><i class="fa-solid fa-arrows-rotate"></i></a>
                        <a href="kelola/kelolaWarga/insertWarga.php"><i class="bx bx-user-plus"></i>Tambahkan</a>
                    </div>
                </div>
                <div class="cari">
                    <form class="form-warga" action="" method="POST">
                        <div class="form-warga-group">
                            <input type="text" name="pencarian" class="pencarian" placeholder="Cari.."/>
                        </div>
                        <div class="form-warga-group">
                            <button type="submit" class="btn-cari"><i class="bx bx-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="box">
                    <div class="data">
                        <table cellspacing="10" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Hp</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th><i class="fa-solid fa-gear"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $batas = 5;
                                        $hal = @$_GET['hal'];
                                        if(empty($hal)){
                                            $posisi = 0;
                                            $hal = 1;
                                        } else{
                                            $posisi = ($hal - 1) * $batas;
                                        }
                                        $no = 1;
                                        if($_SERVER['REQUEST_METHOD'] == "POST"){
                                            $pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
                                            if($pencarian != ''){
                                                $sql = "SELECT * FROM warga WHERE Nama LIKE '%$pencarian%'";
                                                $query = $sql;
                                                $queryJml = $sql;
                                            } else{
                                                $query = "SELECT * FROM warga LIMIT $posisi, $batas";
                                                $queryJml = "SELECT * FROM warga";
                                                $no = $posisi + 1;
                                            }
                                        } else{
                                            $query = "SELECT * FROM warga LIMIT $posisi, $batas";
                                            $queryJml = "SELECT * FROM warga";
                                            $no = $posisi + 1;
                                        }
                                        $sql_warga = mysqli_query($con, $query) or die (mysqli_error($con));
                                        if(mysqli_num_rows($sql_warga) > 0){
                                            while($data = mysqli_fetch_array($sql_warga)){
                                    ?>
                                                <tr>
                                                    <td align="center"><?=$no++?>.</td>
                                                    <td><?=$data['Nama']?></td>
                                                    <td><?=$data['Hp']?></td>
                                                    <td><?=$data['Email']?></td>
                                                    <td><?=$data['Alamat']?></td>
                                                    <td>
                                                        <a href="kelola/kelolaWarga/updateWarga.php?id=<?=$data['ID']?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="kelola/kelolaWarga/deleteWarga.php?id=<?=$data['ID']?>" onclick="return confirm('Yakin Mau Dihapus Nich ☹️')"><i class="fa-solid fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                    <?php
                                            }
                                        } else{
                                            echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                                        }
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination">
                        <?php
                            if(@$_POST['pencarian'] == ''){
                        ?>
                                <div style="float:left;">
                                    <?php
                                        $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                                        echo "Jumlah Data : <b>$jml</b>"
                                    ?>
                                </div>
                                <div style="float:right;">
                                    <ul style="margin:0" class="ul-search">
                                        <?php
                                            $jml_hal = ceil($jml / $batas);
                                            for($i = 1; $i <= $jml_hal; $i++){
                                                if($i != $hal){
                                                    echo "<li><a href=\"?hal=$i\">$i</a></li>";
                                                } else{
                                                    echo "<li class=\"active\"><a>$i</a></li>";
                                                }
                                            }
                                        ?>
                                    </ul>
                                </div>
                        <?php
                            } else{
                                echo "<div style=\"float:left;\">";
                                $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                                echo "Data Hasil Pencarian : <b>$jml</b>";
                                echo "</div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/scriptEditWarga.js"></script>
    </body>
</html>
<?php
    } else{
        echo "<script>window.location='../auth/loginAdmin.php';</script>";
    }
?>