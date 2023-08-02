<?php
    require_once "../Config/config.php";
    if(isset($_SESSION['Email'])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Pesan</title>
        <link rel="icon" href="IMG/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="CSS/styleEditPesan.css">
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
        <div class="container">
            <div class="element">
                <h1>Permohonan Surat</h1>
                <p>Daftar Ajuan Permohonan</p>
                <div class="data">
                    <table cellspacing="6">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pengirim</th>
                                <th>Email</th>
                                <th>Telp</th>
                                <th>Alamat</th>
                                <th>Jenis Surat</th>
                                <th>Pesan</th>
                                <th>Waktu Kirim</th>
                                <th><i class="fa-solid fa-gear"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                    $no = 1;
                                    $query = "SELECT * FROM surat";
                                    $result = mysqli_query($con, $query);
                
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($data = mysqli_fetch_assoc($result)) {
                                ?>
                                            <tr>
                                                <td align="center"><?=$no++?>.</td>
                                                <td align="center"><?=$data['Nama_Pengirim']?></td>
                                                <td align="center"><?=$data['Email_Pengirim']?></td>
                                                <td align="center"><?=$data['Telp_Pengirim']?></td>
                                                <td align="center"><?=$data['Alamat_Pengirim']?></td>
                                                <td align="center"><?=$data['Nama_Surat']?></td>
                                                <td><?=$data['Pesan']?></td>
                                                <td align="center"><?=$data['Waktu_Kirim']?></td>
                                                <td align="center">
                                                    <a href="kelola/kelolaPesan/deletePesan.php?id=<?=$data['ID_surat']?>" onclick="return confirm('Yakin Mau Dihapus Nich ☹️')"><i class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                <?php
                                        }
                                    } else{
                                        echo "Belum Ada Pesan Diterima.";
                                    }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="js/scriptEditPesan.js"></script>
    </body>
</html>
<?php
    } else{
        echo "<script>window.location='../auth/loginAdmin.php';</script>";
    }
?>