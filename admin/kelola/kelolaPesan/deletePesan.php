<?php
    require_once "../../../Config/config.php";

    if(isset($_SESSION['Username'])) {
        mysqli_query($con, "DELETE FROM surat WHERE ID_surat = '$_GET[id]'") or die (mysqli_error($con));
        echo "<script>window.location='../../editPesan.php';</script>";
    } else{
        echo "<script>window.location='../../../auth/loginAdmin.php';</script>";
    }
?>