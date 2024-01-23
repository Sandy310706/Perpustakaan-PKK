<!DOCTYPE html>
<html lang="id" id="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c0dc21dad4.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Nama Buku</title>
    @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden h-screen" id="body">
    <div class="w-screen mb-10 p-4 flex bg-slate-100 shadow-sm">
        <div class="w-[25%] h-full flex items-center">
            <img src="{{ asset('img/ikon.jpg') }}" class="h-14 w-14 mr-2" alt="navabar icon">
            <span class="font-robotoslab">Perpustakaan</span>
        </div>
        <div class="w-1/2 p-4 flex items-center justify-center font-outfit">
            <a href="" class="mr-10">Beranda</a>
            <a href="" class="mr-10">Judul</a>
            <a href="" class="mr-10">Penulis</a>
            <a href="">Tentang Kami</a>
        </div>
        <div class="w-[25%] p-4 flex items-center justify-end">
            <div class="mr-4 font-outfit">
                <button id="btnTheme" class="mr-4" onclick="changeTheme()"></button>
                <a class="cursor-pointer">Login</a>
            </div>
        </div>
    </div>
    <div class="w-full flex justify-center">
        <div class="w-[70%] flex">
            <div class="w-[40%] h-96 bg-black">
                <img src="{{ asset('img/mountain.jpg') }}" class=" w-full h-full rounded-sm" alt="gambar buku">
            </div>
            <div class="w-[60%] px-4 py-2">
                <p class="font-outfit mb-3">ISBN : <span class="text-slate-400">08967474534</span></p>
                <h1 class="text-4xl font-robotoslab">Judul Buku</h1>
                <h2 class="text-md font-outfit mb-2">Penulis : <span class="text-yellow-400">Nama Penulis</span></h2>
                <span class="p-1 bg-green-200 text-green-800 text-sm rounded-md font-worksans"><i class="fa-solid fa-circle mr-1"></i>Tersedia</span>
                <span class="p-1 bg-red-200 text-red-800 text-sm rounded-md font-worksans"><i class="fa-solid fa-circle mr-1"></i>Tidak Tersedia</span>
                <hr class="my-4 border-gray-400">
                <p class="text-neutral-500 font-robotoslab">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nesciunt eos error quam saepe vitae optio obcaecati, dolor nam, repellendus expedita perspiciatis minus neque iusto illum alias animi deserunt doloribus dolores nihil cupiditate illo nostrum explicabo cum. Aliquam sit reiciendis deserunt ipsam, doloribus saepe quidem tempore quisquam asperiores nam eos.</p>
                <div>
                    <button class="mt-2 px-10 py-1 bg-black rounded-md text-white font-outfit mr-2">Pinjam</button>
                    <button class=""><i class="fa-regular fa-bookmark text-2xl"></i></button>
                </div>
            </div>
        </div>
    </div>
    <script>
        // document.addEventListener('DOMContentLoaded', function () {
        //     const html = document.documentElement;
        //     const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        //     const themeBtn = document.getElementById('btnTheme')

        //     if (prefersDark) {
        //         html.classList.add('dark')
        //         themeBtn.innerHTML = '<i class="fa-regular fa-sun"></i>'
        //     } else {
        //         body.classList.remove('dark');
        //         themeBtn.innerHTML = '<i class="fa-solid fa-moon mr-4"></i>'
        //     }
        // });
        function changeTheme(){
            const html = document.documentElement;
            const htmlTheme = html.classList.contains('dark')
            const themeBtn = document.getElementById('btnTheme')
            if (!htmlTheme){
                html.classList.add('dark')
                themeBtn.innerHTML = '<i class="fa-regular fa-sun"></i>'
            }else{
                html.classList.remove('dark')
                themeBtn.innerHTML = '<i class="fa-solid fa-moon"></i>'
            }
        }
    </script>
</body>
</html>
