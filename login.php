<?php
    include "function.php";

    session_start();
    if( isset($_SESSION['userweb']) ) {
    header("location: index.php");
  }
?>

</head><!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | User</title>
</head>
<body class="bg-white h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-md  w-2/5">
        <img src="image/logo type b.png" width="50%" class="mx-auto my-7">
        <p class="text-md mb-5 font-semibold w-3/5 mx-auto text-center">Silahkan Login</p>
        
        <form method="post">
            <?php
        if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $cek = mysqli_query($conn, "SELECT * FROM users where email='$email' and password='$password'");
        $count = mysqli_num_rows($cek);
        if($count===1){
            $ambilrole = mysqli_fetch_array($cek);
            $role = $ambilrole['role'];
            $_SESSION['admin_email'] = $email;

            if($role=='1'){
                $_SESSION['log'] = 'Logged';
                $_SESSION['role'] = '1';

                $query = "SELECT nama FROM users WHERE email='$email'";
                $result = mysqli_query($conn, $query);
                $admin_data = mysqli_fetch_assoc($result);
                $admin_name = $admin_data['nama'];

        $_SESSION['admin_name'] = $admin_name;

                header('location:src/homeADMIN/dashboard.php');
            }else{
                $_SESSION['log'] = 'Logged';
                $_SESSION['role'] = '0';

                header('location:index.php');
            }
        }else{
            echo "<script>
            alert('Akun Tidak Valid');
        </script>";
        }
    };
    ?>
            <label class="text-sm">Email</label>
            <div class="mb-3">
                <input type="email" id="email" name="email" placeholder="Email" class="w-full border rounded px-3 py-2 text-sm focus:outline-none focus:border-black">
            </div>
            <label class="text-sm">Password</label>
            <div class="mb-3">
                <input type="password" id="password" name="password" placeholder="Password" class="w-full border rounded px-3 py-2 text-sm mb-3 focus:outline-none focus:border-black">
            </div>
            <button type="submit" name="login" class="bg-black text-white w-full border  px-3 py-2 mb-6 rounded float-right hover:bg-gray-600 hover:transition duration-300 ease-in-out">Login</button>
            <p class="text-xs text-center my-5">Belum memiliki akun? <a href="register.php"><span class="font-bold">Daftar.</span></a> </p>
        </form>
    </div>
</body>
</html>

</body>
</html>