<?php
   require 'funiklan.php'; 

   session_start();

if (!isset($_SESSION['log']) || $_SESSION['log'] !== 'Logged' || $_SESSION['role'] !== '1') {
    // Pengguna belum login atau bukan admin, arahkan mereka ke halaman login atau halaman lain.
    header('location: ../../login.php'); // Sesuaikan dengan nama halaman login Anda.
    exit();
}
   if( isset($_POST["tambahpromosi"]) ){
    if( tambahpromosi($_POST) > 0){
        echo "<script>
        alert('Data Berhasil Di Tambahkan!!!');
        document.location.href = 'promosi.php';
        </script>";
    }else {
        echo "<script>
        alert('Data Gagal Di Tambahkan!!!');
        document.location.href = 'promosi.php';
        </script>";
    }
   }

$admin_name = $_SESSION['admin_name'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6f0d2c27b1.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Halaman Admin | Promosi</title>
</head>

<body>
    <div>
        <?php include "header.php"; ?>
    </div>
    <div>
        <?php include "sidebar.php"; ?>
    </div>
    <div class="container mx-auto">
    <h1 class="text-4xl mt-24 font-bold font-poppins mb-16 ml-60 ">PROMOSI</h1>
    <div class="flex justify-between">
            <button
                class="bg-blue-600 ml-60 h-10 px-3 py-1 rounded text-white mr-1 mb-4 show-modal hover:shadow-md font-semibold hover:scale-105 hover:bg-white hover:text-blue-600">+ TAMBAH</button>
            <form action="" method="get">
                <div class="mb-4 flex">
                    <input type="search" name="cari"
                        class="border rounded mr-2 px-3 h-10 focus:outline-none focus:ring focus:border-blue-300" value="<?php if(isset($_GET['search'])) { echo $_GET['search']; }?>">
                    <button type="submit" name="searching"
                        class="bg-blue-600 px-3 py-2 h-10 rounded text-white mr-1 mb-4 hover:shadow-md font-semibold hover:scale-105 hover:bg-white hover:text-blue-600">
                        Search
                    </button>
                </div>
            </form>
        </div>
        <div
            class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
            <div class="bg-white rounded shadow-lg w-1/2">
                <div class="border-b px-4 py-2">
                    <h3 class="font-bold">Tambah Data</h3>
                </div>
                <div class="p-3">
                    <form method="post" action="" enctype="multipart/form-data">
                    <label>Foto Promosi</label>
                    <input type="file" id="name" name="gambar_promosi" class="w-full border rounded px-3 py-2 text-sm focus:outline-none focus:border-black mt-1 mb-2" require>
                    <label>Nama Promosi</label>
                    <input type="text" id="nama" name="nama_promosi" placeholder="Masukkan Nama Promosi..."
                    class="w-full border rounded mb-7 px-3 py-2 text-sm focus:outline-none focus:border-black mt-3">
                </div>
                <div class="mr-3">
                    <button class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white float-right mb-4" name="tambahpromosi">Tambah</button>
                    <button class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white float-right mb-4 mr-5 close-modal">Batal</button>
                </div>
                </form>
            </div>
        </div>

        <div class="ml-60">
            <div class="bg-white rounded shadow overflow-x-auto">
                <table class="min-w-full border-separate">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 bg-gray-500 text-left text-xs leading-4 font-semibold text-white uppercase tracking-wider">
                                No</th>
                            <th
                                class="px-6 py-3 bg-gray-500 text-left text-xs leading-4 font-semibold text-white uppercase tracking-wider">
                                Nama</th>
                            <th
                                class="px-6 py-3 bg-gray-500 text-left text-xs leading-4 font-semibold text-white uppercase tracking-wider">
                                Preview</th>
                            <th
                                class="px-6 py-3 bg-gray-500 text-left text-xs leading-4 font-semibold text-white uppercase tracking-wider">
                                Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;?>
                        <?php
                        $tampil = "SELECT * FROM promosi ORDER BY id_promosi DESC";
                        $result = mysqli_query($conn, $tampil);

                        if(isset($_GET['cari'])) {
                            $result = mysqli_query($conn, "SELECT * FROM promosi WHERE nama_promosi LIKE '%".
                            $_GET['cari']. "%'");
                        }
                        while ($data = mysqli_fetch_assoc ($result)) {
                        ?>
                        <tr class="hover:bg-gray-100 transition-colors duration-300 text-center">

                            <td class="px-6 py-4 whitespace-no-wrap"><?php echo $i; ?></td>
                            <td class="px-6 py-4 whitespace-no-wrap"><?php echo $data["nama_promosi"] ?></td>
                            <td class="px-6 py-4 whitespace-no-wrap"><img src="promosi/<?= $data["gambar_promosi"] ?>" class="w-52 h-auto justify-center content-center"></td>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                <a href="editpromosi.php?id_promosi=<?= $data["id_promosi"];?>"
                                    class="px-2 py-1 rounded-md bg-yellow-600 text-sm font-semibold text-white hover:bg-yellow-800">Edit</a>
                                <a href="hapuspromosi.php?id_promosi=<?= $data["id_promosi"];?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data ini?')"
                                    class="py-1 px-2 rounded-md bg-red-600 text-sm font-semibold text-white hover:bg-red-900">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>


    <script>
    const modal = document.querySelector('.modal');

    const showModal = document.querySelector('.show-modal');
    const closeModal = document.querySelector('.close-modal');

    showModal.addEventListener('click', function() {
        modal.classList.remove('hidden')
    });

    closeModal.addEventListener('click', function() {
        modal.classList.add('hidden')
    });
    </script>
</body>
</html>