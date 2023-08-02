<?php
    require_once "../Config/config.php";

    unset($_SESSION['Email']);
    echo "<script>window.location='loginAdmin.php';</script>";
?>