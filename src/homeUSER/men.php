<?php
    require '../../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../font.css">
    <script src="https://kit.fontawesome.com/6f0d2c27b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../font.css">
    <title>Men Section | Asport</title>
</head>
<body class="bg-gray-200">
    <div>
        <?php
        include "navbar.php";
        ?>
    </div>
    <div><?php include "sidebar.php";?></div>
    <div class="cotainer mt-36 ml-72 flex flex-wrap gap-5">
            <?php
             $query = "SELECT produk.*, jenis.nama_jenis, kategori.nama_kategori FROM produk
                    INNER JOIN jenis ON produk.id_jenis = jenis.id_jenis
                    INNER JOIN kategori ON produk.id_kategori = kategori.id_kategori
                    WHERE nama_jenis = 'men'";
            $result = mysqli_query($conn, $query);
            while($data = mysqli_fetch_array($result)){
            ?>
            <div class="w-60 bg-white rounded-lg hover:shadow-lg hover:scale-105 transition-all duration-150 ease-in-out  text-left p-4">
            <a href="src/homeUSER/desc.php?id_produk=<?= $data["id_produk"];?>">
                <img class="w-60 h-auto rounded-md" src="../homeADMIN/image/<?php echo $data['foto_produk'] ?>" alt="" />
                </a>
                <div class="">
                    <p class="mb-2 text-2xl font-bold tracking-tight text-gray-900 mt-4">
                        <?php echo $data['nama_produk'] ?></p>
                    </a>
                    <p class="font-normal text-gray-700 "><?php echo $data['nama_jenis'] ?> |
                        <?php echo $data['nama_kategori'] ?></p>
                    <p class="mb-3 text-md font-semibold text-gray-700">
                        <?php echo "Rp ".number_format($data['harga_produk'],0,',','.'); ?></p>
                    
                </div>
                </a>
            </div>
            <?php } ?>
        </div>
    
</body>
</html>