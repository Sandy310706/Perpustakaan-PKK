<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c0dc21dad4.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="overflow-hidden">
    <nav class="w-screen flex items-center bg-white p-1 text-black font-outfit">
        <div class="w-[30%] flex h-full items-center ml-6">
            <img src="{{ asset('img/ikon.jpg') }}" class="w-20 h-20 items-center" alt="">
            <span class="ml-9">Perpustakaan</span>
        </div>
        <div class="w-[50%] flex justify-center">
            <a href="" class="mr-7">Beranda</a>
            <a href="" class="mr-7">Judul</a>
            <a href="" class="mr-7">Penulis</a>
            <a href="">Tentang Kami</a>
        </div>
        <div class="w-[20%] flex mr-5 justify-end">
            <i class="fa-solid fa-moon mr-4"></i>
            <i class="fa-regular fa-circle-user"></i>
        </div>
    </nav>
    <div class="w-screen flex">
        <div class="w-[20%] h-screen">
            <a href="" class="absolute top-44 left-32"><i class="fa-solid fa-arrow-left mt-11 ml-12 scale-150"></i></a>
            <img src="{{ asset('img/Rectangle 24.png') }}" class="drop-shadow-2xl shadow-2xl w-28 h-46 mt-40 mx-auto scale-100">
            <p class="items-center justify-center text-center">Kacong</p>
        </div>
        <div class="w-[60%] flex mt-5">
            <div class="w-[35%] h-full flex justify-center">
                <img src="{{ asset('img/Rectangle 24.png') }}" class="w-[100%] h-80 scale-100">
            </div>
            <div class="w-[70%] ml-5">  
                <h3 class="text-xs">ISBN: 64727472764</h3>
                <h5 class="text-3xl pt-2">Judul buku</h5>
                <h3 class="text-sm pb-4 pt-1 ">Penulis: Erwin Hormat</h3>
                <span class="text-red-600 rounded-lg text-xs py-1 px-1 bg-red-200"><i class="fa-solid fa-circle mr-1 bg-red-800 rounded-lg"></i>Tidak tersedia</span>
                <p class="text-ms mb-4 pb-1 py-4 mt-1 p-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nemo harum repudiandae doloribus odio minima possimus? Doloribus laborum perferendis excepturi laudantium nesciunt quae, nihil repellat.</p>
                <div class="">
                    <a href="#" class="text-white rounded-lg text-xs py-2 px-6 items-center justify-center bg-black 200">Pinjam</a>
                    <button><i class="fa-regular fa-bookmark ml-2 mt-3 scale-125"></i></button>
                </div>   
            </div>
        </div>
        <div class="w-[20%] h-screen">
            <a href="" class="absolute top-44 right-44"><i class="fa-solid fa-arrow-right ml-8 mt-12 scale-150"></i></a>
            <img src="{{ asset('img/Rectangle 24.png') }}" class="drop-shadow-2xl shadow-2xl w-28 h-46 mt-40 mx-auto scale-100">
            <p class="items-center justify-center text-center">Kacong</p>
        </div>
    </div>
</body>
</html>


{{-- hijaukan
<span class="text-green-600 rounded-lg text-xs py-1 px-1 bg-green-200"><i class="fa-solid fa-circle mr-1 bg-green-800 rounded-lg"></i>tersedia</span> --}}
