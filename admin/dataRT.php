<?php
    require_once "../Config/config.php";
    if(isset($_SESSION['Email'])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data RT</title>
        <link rel="icon" href="IMG/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="CSS/styleDataRT.css">
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
                <h1 align="center">Ketua RT</h1>
                <div class="data">
                    <table cellspacing="10" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Foto</th>
                                <th>RT</th>
                                <th>Nama</th>
                                <th>Hp</th>
                                <th>Email</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                    $no = 1;
                                    $sql_rt = mysqli_query($con, "SELECT * FROM rt") or die (mysqli_error($con));
                                    if(mysqli_num_rows($sql_rt) > 0){
                                        while($data = mysqli_fetch_array($sql_rt)){
                                ?>
                                            <tr>
                                                <td align="center"><?=$no++?>.</td>
                                                <td>
                                                    <?='<img src="data:image/jpeg;base64,'.base64_encode($data['Foto']).'"height="100" width="100"/>';?>
                                                </td>
                                                <td><?=$data['RT']?></td>
                                                <td><?=$data['Nama']?></td>
                                                <td><?=$data['Hp']?></td>
                                                <td><?=$data['Email']?></td>
                                                <td><?=$data['Alamat']?></td>
                                            </tr>
                                <?php
                                        }
                                    }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="js/scriptDataRT.js"></script>
    </body>
</html>
<?php
    } else{
        echo "<script>window.location='../auth/loginAdmin.php';</script>";
    }
?>