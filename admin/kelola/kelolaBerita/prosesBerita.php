<?php
    require_once "../../../Config/config.php";

    if(isset($_SESSION['Email'])) {
        if(isset($_POST['add'])){
            $judul = trim(mysqli_real_escape_string($con, $_POST['Judul']));
            $kategori = $_POST['Kategori'];
            $gambar = addslashes(file_get_contents($_FILES['Gambar']['tmp_name']));
            $desc = trim(mysqli_real_escape_string($con, $_POST['Deskripsi']));
            $author = trim(mysqli_real_escape_string($con, $_POST['Author']));
            $tgl = trim(mysqli_real_escape_string($con, $_POST['Tanggal']));
            mysqli_query($con, "INSERT INTO berita (ID, Judul, Kategori, Gambar, Deskripsi, Author, Tanggal) VALUES ('', '$judul', '$kategori', '$gambar', '$desc', '$author', '$tgl')") or die (mysqli_error($con));
            echo "<script>window.location='../../editBerita.php';</script>";
        } else if(isset($_POST['edit'])){
            $id = $_POST['id'];
            $judul = trim(mysqli_real_escape_string($con, $_POST['Judul']));
            $kategori = $_POST['Kategori'];
            $gambar = addslashes(file_get_contents($_FILES['Gambar']['tmp_name']));
            $desc = trim(mysqli_real_escape_string($con, $_POST['Deskripsi']));
            $author = trim(mysqli_real_escape_string($con, $_POST['Author']));
            $tgl = trim(mysqli_real_escape_string($con, $_POST['Tanggal']));
            mysqli_query($con, "UPDATE berita SET Judul = '$judul', Kategori = '$kategori', Gambar = '$gambar', Deskripsi = '$desc', Author = '$author', Tanggal = '$tgl' WHERE ID = '$id'") or die (mysqli_error($con));
            echo "<script>window.location='../../editBerita.php';</script>";
        }
    } else{
        echo "<script>window.location='../../../auth/loginAdmin.php';</script>";
    }
?>