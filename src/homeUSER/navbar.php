<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/6f0d2c27b1.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../../font.css">

</head>
<body>
<nav class="bg-white shadow-md fixed top-0 w-full z-20">
            <div class="container mx-auto items-center p-5">
                <ul class="flex items-center space-x-4 ">
                    <li><img src="../../image/logo type b.png" width="23%" class="mr-80"></li>
                    <li><a href="../../index.php" class="font-semibold text-black border-b-2 border-black px-3 py-2">Home</a></li>
                    <li><a href="men.php" class="font-semibold text-black px-3 py-2 rounded-md  hover:bg-black hover:text-white transition-all duration-150 ease-in-out  ">Men</a></li>
                    <li><a href="women.php" class="font-semibold text-black px-3 py-2 rounded-md hover:bg-black hover:text-white transition-all duration-150 ease-in-out  ">Women</a></li>
                    <li><a href="kids.php" class="font-semibold text-black px-3 py-2 rounded-md  hover:bg-black hover:text-white transition-all duration-150 ease-in-out  ">Kids</a></li>
                    <!-- search bar -->
                    <div class="flex">
                        <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false"
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
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="sr-only">Search icon</span>
                            </div>
                            <input type="text" id="search-navbar" class="block w-full p-2 pl-10 mr-32 text-sm mt-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search...">
                        </div>
                    </div>
                    <a href="cart.html">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 hover:border-2 border-white rounded-md transition-allduration-75 ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                          </svg>                                                                                                     
                    </a>
                    <a href="../../account.php">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 hover:border-2 border-white rounded-md transition-allduration-75 ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                          </svg>                                                                             
                    </a>
                </ul>
            </div>
        </nav>
    </body>
</html>