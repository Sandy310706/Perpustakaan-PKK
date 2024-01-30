<!DOCTYPE html>
<html lang="id">
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
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden h-screen">
    <div class="w-full h-full">
        @include('user.layouts.navbar')
        @yield('detailbuku')
        @yield('halamanjudul')
    </div>
</body>
</html>

{{-- Search bar --}}
{{-- <div class="w-screen p-4">
    <div class="w-[40%] h-10 flex mx-auto border border-[#646464] rounded-md">
        <div class="w-[10%] h-full flex justify-center items-center border-r border-[#646464]">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="w-[90%] h-full flex items-center">
            <input type="text" class="w-full ml-4 outline-none placeholder:font-outfit" placeholder="Masukan Judul">
            <button class="px-6 py-1 mr-2 bg-cyan-400 rounded-md text-white font-outfit">Cari</button>
        </div>
    </div>
</div> --}}
