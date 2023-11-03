<?php
    require 'function.php';
    session_start();

if (!isset($_SESSION['log']) || $_SESSION['log'] !== 'Logged' || $_SESSION['role'] !== '1') {
    // Pengguna belum login atau bukan admin, arahkan mereka ke halaman login atau halaman lain.
    header('location: ../../login.php'); // Sesuaikan dengan nama halaman login Anda.
    exit();
}
     $id_produk =$_GET["id_produk"];
    
    $query = "SELECT produk.*, jenis.nama_jenis, kategori.nama_kategori FROM produk
                INNER JOIN jenis ON produk.id_jenis = jenis.id_jenis
                INNER JOIN kategori ON produk.id_kategori = kategori.id_kategori
                WHERE produk.id_produk = $id_produk";
    $result = mysqli_query($conn, $query);
    $produk = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">
    <div class="bg-white shadow-md py-8">
        <h1 class="text-4xl text-center font-bold font-poppins">INFO PRODUK SEPATU</h1>
    </div>
    <div class="flex mt-16 justify-start ml-12 space-x-20">
        <div>
            <img class="w-11/12 h-auto rounded-md mb-5 justify-center shadow-md"
                src="image/<?php echo $produk['foto_produk'] ?>" alt="" />
        </div>
        <div class=" w-2/3 h-auto mr-10">
            <p class="text-3xl font-semibold"><?= $produk["nama_produk"]; ?></p>
            <p class="mb-6 text-lg"><?= $produk['nama_kategori'] ?> | <?= $produk['nama_jenis'] ?></p>
            <p class="mb-3 text-lg"><span class="font-semibold">Ukuran Sepatu :
                </span><?php echo $produk['ukuran_produk'] ?></p>
            <p class="mb-3 text-lg"><span class="font-semibold">Stok Sepatu Tersedia : </span><span
                    class="text-red-500"><?php echo $produk['stok_produk'] ?></span></p>
            <p class="mb-3 text-lg"><span class="font-semibold">Harga
                    Sepatu</span><br><?php echo "Rp ".number_format($produk['harga_produk'],0,',','.'); ?>
            </p>
            <div class="group inline-block relative">
                <div class="text-justify"><span class="font-semibold text-lg">Deskripsi : <br></span>
                    <?= $produk["desc_produk"]; ?>
                </div>
                <div class="flex gap-3 content-center mt-5">
                    <a href="editproduk.php?id_produk=<?= $produk["id_produk"];?>"
                        class="px-4 py-2 rounded-md bg-yellow-600 text-lg font-semibold text-white hover:bg-yellow-800"><span>Edit</span></a>
                    <a href="produk.php"
                        class="px-4 py-2 rounded-md bg-red-600 text-lg font-semibold text-white hover:bg-red-900"><span>Back</span></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>