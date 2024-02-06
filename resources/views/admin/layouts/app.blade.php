<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    {{-- Css --}}
    @vite('resources/css/app.css')

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    {{-- Icon --}}
    <script src="https://kit.fontawesome.com/c0dc21dad4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="bg-stone-100 box-border font-outfit">
    <div class="w-screen h-screen">
        <div class="w-[20%] h-screen flex justify-end items-center fixed ">
            <aside class="w-[95%] h-[95%] bg-[#202F3B] rounded-lg flex flex-col items-center font-outfit  shadow-2xl drop-shadow-2xl">
                @include('admin.layouts.sidebar')
            </aside>
        </div>
        <div class="ml-[20%] w-[80%] py-4 px-2">
            <nav class="w-full bg-white rounded-md p-4 drop-shadow-xl flex justify-between">
                <div class="w-1/2">@yield('titleNav')</div>
                <div class="w-1/2 text-end">Selamat Datang,  {{ auth()->user()->nama }}</div>
            </nav>
            @yield('dashboard')
            @yield('pinjamansiswa')
            @yield('kelolabuku')
            @yield('kelolauser')
        </div>
    </div>
</body>
</html>
