<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-screen h-screen flex">
        @include('admin.layouts.sidebar')
        <div class="w-[77%] p-2">
            @yield('dashboard')
        </div>
    </div>
</body>
</html>