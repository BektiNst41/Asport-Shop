<?php
require 'function.php';
session_start();

if (!isset($_SESSION['log']) || $_SESSION['log'] !== 'Logged' || $_SESSION['role'] !== '1') {
    // Pengguna belum login atau bukan admin, arahkan mereka ke halaman login atau halaman lain.
    header('location: ../../login.php'); // Sesuaikan dengan nama halaman login Anda.
    exit();
}
    $id_kategori = $_GET["id_kategori"];

    if(hapuskategori($id_kategori) > 0){
        echo "<script>
            alert('Data Berhasil Di hapus!!!');
            document.location.href = 'categori.php';
        </script>";
    }else{
        echo "<script>
            alert('Data Gagal Di hapus!!!');
            document.location.href = 'categori.php';
        </script>";
    }
?>