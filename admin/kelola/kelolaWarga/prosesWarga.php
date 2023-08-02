<?php
    require_once "../../../Config/config.php";

    if(isset($_SESSION['Email'])) {
        if(isset($_POST['add'])){
            $nama = trim(mysqli_real_escape_string($con, $_POST['Nama']));
            $hp = trim(mysqli_real_escape_string($con, $_POST['Hp']));
            $email = trim(mysqli_real_escape_string($con, $_POST['Email']));
            $alamat = trim(mysqli_real_escape_string($con, $_POST['Alamat']));
            mysqli_query($con, "INSERT INTO warga (ID, Nama, Hp, Email, Alamat) VALUES ('', '$nama', '$hp', '$email', '$alamat')") or die (mysqli_error($con));
            echo "<script>window.location='../../editWarga.php';</script>";
        } else if(isset($_POST['edit'])){
            $id = $_POST['id'];
            $nama = trim(mysqli_real_escape_string($con, $_POST['Nama']));
            $hp = trim(mysqli_real_escape_string($con, $_POST['Hp']));
            $email = trim(mysqli_real_escape_string($con, $_POST['Email']));
            $alamat = trim(mysqli_real_escape_string($con, $_POST['Alamat']));
            mysqli_query($con, "UPDATE warga SET Nama = '$nama', Hp = '$hp', Email = '$email', Alamat = '$alamat' WHERE ID = '$id'") or die (mysqli_error($con));
            echo "<script>window.location='../../editWarga.php';</script>";
        }
    } else{
        echo "<script>window.location='../../../auth/loginAdmin.php';</script>";
    }
?>