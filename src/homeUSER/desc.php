<?php
 require '../../koneksi.php';

 $id_produk =$_GET["id_produk"];

 $query = "SELECT produk.*, jenis.nama_jenis, kategori.nama_kategori FROM produk
                INNER JOIN jenis ON produk.id_jenis = jenis.id_jenis
                INNER JOIN kategori ON produk.id_kategori = kategori.id_kategori
                WHERE produk.id_produk = $id_produk";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../font.css">
    <title>Description Product</title>
</head>

<body class="bg-gray-200">
    <div><?php include "navbar.php"; ?> </div>
    <div class="bg-white flex mt-32 justify-start mx-10 p-5 rounded-md">
        <div class="">
            <img src="../homeADMIN/image/<?php echo $data['foto_produk'] ?>" class="w-9/12 rounded-md "
                alt="">
        </div>
        <div class=" w-2/3 h-auto -ml-20">
            <p class="text-5xl font-semibold mb-2"><?= $data['nama_produk'] ?></p>
            <p class="mb-3 text-lg"><?php echo $data['nama_jenis'] ?> |
                        <?php echo $data['nama_kategori'] ?></p>
            <p class="mb-6 text-3xl font-semibold"><?= "Rp ".number_format($data['harga_produk'],0,',','.'); ?></p>
            <div class="group inline-block relative">
                <div
                    class="flex items-center justify-center rounded-md border-2 border-black px-6 text-md font-semibold py-2 w-full">
                    <button class="">Size</button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 mt-1 ml-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <ul class="hidden group-hover:block absolute z-10 py-2 bg-white border overflow-y-auto h-32 rounded shadow ">
                    <li><a href="#"
                            class="block px-10 font-semibold py-2 text-gray-800 hover:bg-slate-700 hover:text-white transition-all delay-50 transform-50 ease-in-out">36</a>
                    </li>
                    <li><a href="#"
                            class="block px-10 font-semibold py-2 text-gray-800 hover:bg-slate-700 hover:text-white transition-all delay-50 transform-50 ease-in-out">37</a>
                    </li>
                    <li><a href="#"
                            class="block px-10 font-semibold py-2 text-gray-800 hover:bg-slate-700 hover:text-white transition-all delay-50 transform-50 ease-in-out">38</a>
                    </li>
                    <li><a href="#"
                            class="block px-10 font-semibold py-2 text-gray-800 hover:bg-slate-700 hover:text-white transition-all delay-50 transform-50 ease-in-out">39</a>
                    </li>
                    <li><a href="#"
                            class="block px-10 font-semibold py-2 text-gray-800 hover:bg-slate-700 hover:text-white transition-all delay-50 transform-50 ease-in-out">40</a>
                    </li>
                    <li><a href="#"
                            class="block px-10 font-semibold py-2 text-gray-800 hover:bg-slate-700 hover:text-white transition-all delay-50 transform-50 ease-in-out">41</a>
                    </li>
                    <li><a href="#"
                            class="block px-10 font-semibold py-2 text-gray-800 hover:bg-slate-700 hover:text-white transition-all delay-50 transform-50 ease-in-out">42</a>
                    </li>
                    <li><a href="#"
                            class="block px-10 font-semibold py-2 text-gray-800 hover:bg-slate-700 hover:text-white transition-all delay-50 transform-50 ease-in-out">43</a>
                    </li>
                    <li><a href="#"
                            class="block px-10 font-semibold py-2 text-gray-800 hover:bg-slate-700 hover:text-white transition-all delay-50 transform-50 ease-in-out">44</a>
                    </li>
                </ul>
            </div>
            <div class="text-justify pt-5 mb-5 w-11/12">
                <?= $data['desc_produk'] ?>
            </div>
            <div class="flex justify-start items-center pt-5">
                <button
                    class="bg-black py-2 px-14 text-sm rounded-md text-white hover:bg-gray-700 transition-all duration-150 mr-4">Beli</button>
                <a href="cart.html">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-7 h-7 hover:scale-90 border-white rounded-md transition-all duration-150 ease-in-out">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

</body>

</html>