<?php
    require_once "../../../Config/config.php";

    if(isset($_SESSION['Email'])) {
        mysqli_query($con, "DELETE FROM berita WHERE ID = '$_GET[id]'") or die (mysqli_error($con));
        echo "<script>window.location='../../editBerita.php';</script>";
    } else{
        echo "<script>window.location='../../../auth/loginAdmin.php';</script>";
    }
?>