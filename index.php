<?php
    require 'koneksi.php';
?>

<!DOCTYPE html>
<html class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6f0d2c27b1.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="font.css">
</head>

<body class="bg-gray-200">
    <header class="">
        <nav class="bg-white shadow-md fixed top-0 w-full z-20">
            <div class="container mx-auto items-center p-5">
                <ul class="flex items-center space-x-4 ">
                    <li><img src="image/logo type b.png" width="23%" class="mr-80"></li>
                    <li><a href="index.php" class="font-semibold text-black border-b-2 border-black px-3 py-2">Home</a>
                    </li>
                    <li><a href="src/homeUSER/men.php"
                            class="font-semibold text-black px-3 py-2 rounded-md  hover:bg-black hover:text-white transition-all duration-150 ease-in-out  ">Men</a>
                    </li>
                    <li><a href="src/homeUSER/women.php"
                            class="font-semibold text-black px-3 py-2 rounded-md hover:bg-black hover:text-white transition-all duration-150 ease-in-out  ">Women</a>
                    </li>
                    <li><a href="src/homeUSER/kids.php"
                            class="font-semibold text-black px-3 py-2 rounded-md  hover:bg-black hover:text-white transition-all duration-150 ease-in-out  ">Kids</a>
                    </li>
                    <!-- search bar -->
                    <div class="flex">
                        <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                            aria-expanded="false"
                            class="md:hidden text-gray-500  hover:bg-gray-100  focus:outline-none focus:ring-4 focus:ring-gray-200  rounded-lg text-sm p-2.5 mr-1">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                        <div class="relative hidden md:block">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 " aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="sr-only">Search icon</span>
                            </div>
                            <input type="text" id="search-navbar"
                                class="block w-full p-2 pl-10 mr-32 text-sm mt-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                                placeholder="Search...">
                        </div>
                    </div>
                    <a href="cart.html">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-7 h-7 hover:border-2 border-white rounded-md transition-allduration-75 ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </a>
                    <a href="login.php">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-7 h-7 hover:border-2 border-white rounded-md transition-all duration-75 ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </a>
                </ul>
            </div>
        </nav>
    </header>
    <center>
        <style>
        .slideshow-container {
            max-width: 80%;
            position: relative;
            margin: 0 auto;
            overflow: hidden;
            /* Mengatasi gambar yang melebihi container */
        }

        .slideshow-slide {
            display: none;
            width: 100%;
            transition: opacity 1s ease-in-out;
            /* Efek transisi untuk perpindahan slide */
        }

        .slideshow-slide img {
            width: 100%;
            height: auto;
        }

        .slideshow-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 2;
            cursor: pointer;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
        }

        .slideshow-button-prev {
            left: 0;
        }

        .slideshow-button-next {
            right: 0;
        }
        </style>
        <div class="flex justify-center items-center mt-14 h-screen">
            <div class="slideshow-container">
                <!-- Slide 1 -->
                <div class="slideshow-slide">
                    <img src="image/Iklan/d1.png" alt="Slide 1">
                </div>

                <!-- Slide 2 -->
                <div class="slideshow-slide">
                    <img src="image/Iklan/d2.png" alt="Slide 2">
                </div>

                <!-- Slide 3 -->
                <div class="slideshow-slide">
                    <img src="image/Iklan/d3.png" alt="Slide 3">
                </div>

                <!-- Add more slides here -->

                <!-- Slideshow navigation buttons -->
                <a class="slideshow-button slideshow-button-prev" onclick="changeSlide(-1)">&#10094;</a>
                <a class="slideshow-button slideshow-button-next" onclick="changeSlide(1)">&#10095;</a>
            </div>
        </div>
        <a href="src/homeUSER/men.php"><img src="image/Iklan/Men.png"></a>

        <!--MEN SHOES-->
    </center>
    <p class="font-bold text-4xl ml-16 mt-14">MEN SHOES</p>
    <center>
    <div class="flex flex-wrap ml-16 mt-6 gap-9">
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
                <img class="w-60 h-auto rounded-md" src="src/homeADMIN/image/<?php echo $data['foto_produk'] ?>" alt="" />
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
        <a href="src/homeUSER/men.php">
        <button class="border-spacing-2 mt-10 bg-black hover:scale-105 hover:bg-gray-600 px-5 py-3 mb-10 rounded-md text-sm font-reguler text-white transition-all duration-150 ease-in-out">See More</button></a>
        <a href="src/homeUSER/women.php"><img src="image/Iklan/women.png"></a>
    </center>
    <!-- women -->
    <p class="font-semibold text-4xl ml-16 mt-14">WOMEN SHOES</p>
    <center>
    <div class="flex flex-wrap ml-16 mt-6 gap-9">
            <?php
             $query = "SELECT produk.*, jenis.nama_jenis, kategori.nama_kategori FROM produk
                    INNER JOIN jenis ON produk.id_jenis = jenis.id_jenis
                    INNER JOIN kategori ON produk.id_kategori = kategori.id_kategori
                    WHERE nama_jenis = 'women'";
            $result = mysqli_query($conn, $query);
            while($data = mysqli_fetch_array($result)){
            ?>
            <div class="w-60 bg-white rounded-lg hover:shadow-lg hover:scale-105 transition-all duration-150 ease-in-out  text-left p-4">
            <a href="src/homeUSER/desc.php?id_produk=<?= $data["id_produk"];?>">
                <img class="w-60 h-auto rounded-md" src="src/homeADMIN/image/<?php echo $data['foto_produk'] ?>" alt="" />
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
        <a href="src/homeUSER/women.php">
            <button class="border-spacing-2 mt-10 bg-black hover:scale-105 hover:bg-gray-600 px-5 py-3 mb-10 rounded-md text-sm font-reguler text-white transition-all duration-150 ease-in-out">See More</button></a>
        <a href="src/homeUSER/kids.php"><img src="image/Iklan/kids.png"></a>
    </center>

    <!--kids-->
    <p class="font-semibold text-4xl ml-16 mt-14">KIDS SHOES</p>
    <center>
    <div class="flex flex-wrap ml-16 mt-6 gap-9">
            <?php
             $query = "SELECT produk.*, jenis.nama_jenis, kategori.nama_kategori FROM produk
                    INNER JOIN jenis ON produk.id_jenis = jenis.id_jenis
                    INNER JOIN kategori ON produk.id_kategori = kategori.id_kategori
                    WHERE nama_jenis = 'kids'";
            $result = mysqli_query($conn, $query);
            while($data = mysqli_fetch_array($result)){
            ?>
            <div class="w-60 bg-white rounded-lg hover:shadow-lg hover:scale-105 transition-all duration-150 ease-in-out  text-left p-4">
            <a href="src/homeUSER/desc.php?id_produk=<?= $data["id_produk"];?>">
                <img class="w-60 h-auto rounded-md" src="src/homeADMIN/image/<?php echo $data['foto_produk'] ?>" alt="" />
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
        <a href="src/homeUSER/kids.php">
            <button class="border-spacing-2 mt-10 bg-black hover:scale-105 hover:bg-gray-600 px-5 py-3 mb-10 rounded-md text-sm font-medium text-white transition-all duration-150 ease-in-out">See More</button></a>
    </center>


    <!--FOOTER-->    
    <footer class="bg-black ">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="" class="flex items-center w-40">
                        <img src="image/logo type w.png"></span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white  uppercase dark:text-white">Follow us</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="Instagram.com" class="hover:underline ">Instagram</a>
                            </li>
                            <li>
                                <a href="Tiktok" class="hover:underline">Tiktok</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white  uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Maps</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">WhatsApp</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href=""
                        class="hover:underline">Sport Store</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="">
        <div class="bg-white rounded-full w-10 h-10 fixed bottom-5 right-5 cursor-pointer shadow-lg flex hover:bg-gray-300 hover:scale-110 transition-all duration-150 ease-in-out">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 m-auto">
                <path fill-rule="evenodd"
                    d="M11.47 4.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 6.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5zm.53 7.59l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 12.31z"
                    clip-rule="evenodd" />
            </svg>
        </div>
    </a>
    <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slideshow-slide');

    function showSlide(n) {
        slides[currentSlide].style.opacity = '100';
        setTimeout(() => {
            slides[currentSlide].style.display = 'none';
            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].style.display = 'block';
            setTimeout(() => {
                slides[currentSlide].style.opacity = '1';
            }, 10);
        }, 200); // Waktu untuk efek transisi
    }

    function changeSlide(n) {
        showSlide(currentSlide + n);
    }

    // Show the first slide initially
    showSlide(currentSlide);

    // Auto move to the next slide every 3 seconds (3000 milliseconds)
    setInterval(() => {
        changeSlide(1);
    }, 3000);
    </script>
</body>

</html>