<?php
    require_once "../../../Config/config.php";

    if(isset($_SESSION['Email'])) {
        mysqli_query($con, "DELETE FROM warga WHERE ID = '$_GET[id]'") or die (mysqli_error($con));
        echo "<script>window.location='../../editWarga.php';</script>";
    } else{
        echo "<script>window.location='../../../auth/loginAdmin.php';</script>";
    }
?>