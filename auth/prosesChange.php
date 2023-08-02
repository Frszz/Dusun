<?php
    require_once "../Config/config.php";
    
    if(isset($_SESSION['Email'])) {
        echo "<script>window.location='../admin/dashboard.php';</script>";
    } else {
        if(isset($_POST['edit'])){
            $id = $_POST['id'];
            $pfp = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));
            $rt = trim(mysqli_real_escape_string($con, $_POST['RT']));
            $nama = trim(mysqli_real_escape_string($con, $_POST['Nama']));
            $hp = trim(mysqli_real_escape_string($con, $_POST['Hp']));
            $email = trim(mysqli_real_escape_string($con, $_POST['Email']));
            $alamat = trim(mysqli_real_escape_string($con, $_POST['Alamat']));
            $pass = trim(mysqli_real_escape_string($con, $_POST['Password']));
            mysqli_query($con, "UPDATE rt SET Foto = '$pfp', RT = '$rt', Nama = '$nama', Hp = '$hp', Email = '$email', Alamat = '$alamat', Password = '$pass' WHERE ID = '$id'") or die (mysqli_error($con));
            echo "<script>alert('Pembaruan Berhasil');
            window.location='askChange.php';</script>";
        } else if(isset($_POST['Cancel'])){
            echo "<script>window.location='loginAdmin.php';</script>";
        }
    }
?>
