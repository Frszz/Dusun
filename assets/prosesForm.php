<?php
    require_once "../Config/config.php";

    if(isset($_POST['submit'])){
        $nama = trim(mysqli_real_escape_string($con, $_POST['Nama']));
        $email = trim(mysqli_real_escape_string($con, $_POST['Email']));
        $telp = trim(mysqli_real_escape_string($con, $_POST['Telp']));
        $alamat = trim(mysqli_real_escape_string($con, $_POST['Alamat']));
        $jenis = $_POST['Jenis'];
        $pesan = trim(mysqli_real_escape_string($con, $_POST['Pesan']));
        mysqli_query($con, "INSERT INTO surat (ID_surat, Nama_Pengirim, Email_Pengirim, Telp_Pengirim, Alamat_Pengirim, Nama_Surat, Pesan) VALUES ('', '$nama', '$email', '$telp', '$alamat', '$jenis', '$pesan')") or die (mysqli_error($con));
        echo "<script>window.location='layanan.php';</script>";
    } else{
        echo "Pengiriman Gagal.";
    }
?>