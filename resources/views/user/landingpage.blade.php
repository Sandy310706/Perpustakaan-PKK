<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <link href="/dist/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Amaranth&family=Bebas+Neue&family=Gabarito:wght@400;500&family=Inter:wght@100&family=Josefin+Sans&family=Merriweather:wght@300&family=Oswald:wght@200;500&family=Outfit:wght@500&family=Paytone+One&family=Righteous&family=Roboto+Slab:wght@500&family=Rock+Salt&family=Satisfy&family=Ubuntu:ital@1&family=Work+Sans:wght@100&display=swap" rel="stylesheet">
</head>

<body class="flex flex-col min-h-screen">
    <nav class="w-full  h-15 bg-transparent">
        <div class="relative">
            <img src="imglanding/black.svg" alt="" class="absolute -z-10 right-0" width="30%">
        </div>
        <div class="flex ml-11">
            <div class="flex h-14  w-full">
                <div class="flex w-56 ">
                    <div class="image">
                        <img src="imglanding/logo.png" alt="">
                    </div>
                    <div class="flex items-center">
                        <h2 class="text-black text-xl font-Palatino ">Kacong beringas</h2>
                    </div>
                </div>
                <div class="flex w-[60%] justify-center ">
                    <div class="flex items-center mx-auto font-Outfit">
                        <a href="">Beranda</a>
                        <a href="" class="ml-9">Judul</a>
                        <a href="" class="ml-9">penulis</a>
                        <a href="" class="ml-9">Tentang Kami</a>
                    </div>
                </div>
                <div class="flex items-center justify-end w-72 text-white">
                    <i class="bi bi-moon-stars-fill mr-5 scale-150 "></i>
                    <i class="bi bi-person scale-150"></i>
                </div>
            </div>
        </div>
    </nav>

    <section>
        <div class="flex mt-14 flex-col">
            <div class="w-full  flex justify-center">
                <div class="border rounded-l-lg flex items-center w-8 justify-center"> <i
                        class="bi bi-search flex items-center mx-0"></i></div>
                <input type="text" class="w-[30%] h-11  border-y-2  " placeholder="Judul,Penulis,Genre">
                <div class="flex items-center border-y-2  w-28 justify-center border-r-2 ">
                    <button class="bg-blue-400 w-24 h-8 rounded-full">Cari</button>
                </div>
            </div>
            <div class="w-full flex justify-evenly">
                <div class="flex flex-col justify-center items-center w-[30%]">
                    <p class="text-2xl drop-shadow-xl">Mecari dan Membaca</p>
                    <p class="">Buku sampai goblok</p>
                    <p class="">Lorem lorem lorem lorem</p>
                </div>
                <div class="flex justify-start">
                    <img src="imglanding/landing.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <div class="w-full flex h-56 flex-row justify-between ">
        <div class="flex items-start justify-center w-[20%]  ">
            <div
                class="w-[50%] h-40 p-3 bg-slate-500 mx-10 rounded-[10px]  flex flex-col shadow-[rgba(17, 17, 26, 0.1)_0px_1px_0px_rgba(17, 17, 26, 0.1)_0px_8px_24px_rgba(17, 17, 26, 0.1)_0px_16px_48px]">
                <div class="">
                    <h1 class="ml-2 mt-1 text-2xl text-white font-Paytone">22</h1>
                </div>
                <div class="h-full flex items-end justify-center mb-2">
                    <p class="text-lg text-white font-Outfit">dasds</p>
                </div>
            </div>
        </div>
        <div class="flex items-end justify-center w-[20%]   ">
            <div class="w-[50%] h-40 p-3 bg-slate-500  rounded-[10px]  shadow-2xl flex flex-col justify-end ">
                <div class="">
                    <h1 class="ml-2 mt-1 text-2xl text-white">22</h1>
                </div>
                <div class="h-full flex items-end justify-center mb-2">
                    <p class="text-lg text-white">dasds</p>
                </div>
            </div>
        </div>
        <div class="flex items-start justify-center w-[20%]  ">
            <div class="w-[50%] h-40 p-3 bg-slate-500  mx-10  rounded-[10px]  shadow-2xl flex flex-col">
                <div class="">
                    <h1 class="ml-2 mt-1 text-2xl text-white">22</h1>
                </div>
                <div class="h-full flex items-end justify-center mb-2 ">
                    <p class="text-xl text-white">dasds</p>
                </div>
            </div>
        </div>
        <div class="flex items-end justify-center w-[20%]  ">
            <div class="w-[50%] h-40 p-3  bg-slate-500  mx-10  rounded-[10px]  shadow-2xl flex flex-col">
                <div class="">
                    <h1 class="ml-2 mt-1 text-2xl text-white">22</h1>
                </div>
                <div class="h-full flex items-end justify-center mb-2">
                    <p class="text-xl text-white">dasds</p>
                </div>
            </div>
        </div>
        <div class="flex items-start justify-center w-[20%]  ">
            <div class="w-[50%] h-40 p-3  bg-slate-500  mx-10  rounded-[10px]  shadow-2xl flex flex-col">
                <div class="">
                    <h1 class="ml-2 mt-1 text-2xl text-white">22</h1>
                </div>
                <div class="h-full flex items-end justify-center mb-2">
                    <p class="text-lg text-white">dasds</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full flex-col  mt-20 ">
        <div class="flex justify-center">
            <h1 class="text-black text-5xl font-roboto">Buku</h1>
        </div>
        <div class="flex w-full justify-center">
            <div class="flex justify-center mt-20 w-[100%] flex-wrap">
                <div class="flex justify-center w-[20%]">
                    <div class="flex flex-col my-4 items-center">
                        <div class="flex justify-start flex-col my-3">
                            <div class="w-[80%] flex justify-center ">
                                <img src="imglanding/Rectangle 14.png" alt="" width="">
                            </div>
                            <div class="flex flex-col">
                                <h1 class="flex">Judul Buku</h1>
                                <p>dsds</p>
                                <div class="bg-red-200 w-32 flex justify-around rounded-full mt-1">
                                    <div class=" flex items-center">
                                        <img src="imglanding/Ellipse 45 (1).svg" alt="">
                                    </div>
                                    <div class=" flex items-center text-red-700">
                                        <p>Tidak Tersedia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col my-4">
                    <div class="flex justify-start flex-col my-3">
                        <div class="w-[80%] flex justify-center ">
                            <img src="imglanding/Rectangle 14.png" alt="" width="">
                        </div>
                        <div class="flex flex-col w-32">
                            <h1 class="flex">Judul Buku</h1>
                            <p>dsds</p>
                            <div class="bg-green-200 w-32 flex justify-around rounded-full mt-1">
                                <div class=" flex items-center">
                                    <img src="imglanding/Ellipse 45.svg" alt="">
                                </div>
                                <div class=" flex items-center text-green-600">
                                    <p>Tidak Tersedia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col my-4">
                    <div class="flex justify-start flex-col my-3">
                        <div class="w-[80%] flex justify-center ">
                            <img src="imglanding/Rectangle 14.png" alt="" width="">
                        </div>
                        <div class="flex flex-col w-32">
                            <h1 class="flex">Judul Buku</h1>
                            <p>dsds</p>
                            <div class="bg-red-300 w-32 flex justify-around rounded-full mt-1">
                                <div class=" flex items-center">
                                    <img src="imglanding/Ellipse 45 (1).svg" alt="">
                                </div>
                                <div class=" flex items-center text-red-700">
                                    <p>Tidak Tersedia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col my-4">
                    <div class="flex justify-start flex-col my-3">
                        <div class="w-[80%] flex justify-center ">
                            <img src="imglanding/Rectangle 14.png" alt="" width="">
                        </div>
                        <div class="flex flex-col w-32">
                            <h1 class="flex">Judul Buku</h1>
                            <p>dsds</p>
                            <div class="bg-green-200 w-32 flex justify-around rounded-full mt-1">
                                <div class=" flex items-center">
                                    <img src="imglanding/Ellipse 45.svg" alt="">
                                </div>
                                <div class=" flex items-center text-green-600">
                                    <p>Tidak Tersedia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col my-4">
                    <div class="flex justify-start flex-col my-3">
                        <div class="w-[80%] flex justify-center ">
                            <img src="imglanding/Rectangle 14.png" alt="" width="">
                        </div>
                        <div class="flex flex-col w-32">
                            <h1 class="flex">Judul Buku</h1>
                            <p>dsds</p>
                            <div class="bg-red-300 w-32 flex justify-around rounded-full mt-1">
                                <div class=" flex items-center">
                                    <img src="imglanding/Ellipse 45 (1).svg" alt="">
                                </div>
                                <div class=" flex items-center text-red-700">
                                    <p>Tidak Tersedia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="flex justify-center w-full mt-10">
        <div class="w-[50%] flex justify-center flex-col items-center">
            <h1 class="flex justify-center text-black text-3xl">Tentang Kami</h1>
            <div class="mt-5">
                <p class="text-center text-xl">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt
                    excepturi beatae fugiat corrupti tempora alias mollitia accusamus, velit veniam distinctio,
                    similique tempore corporis atque eius aspernatur fugit quia? Possimus repellendus perferendis autem
                    minima ut illo quo fuga iusto reprehenderit reiciendis nobis similique beatae facilis unde harum,
                    est quae voluptatibus praesentium.</p>
            </div>
        </div>
    </div>

    <div class="w-full flex justify-center my-10">
        <div class="w-[80%] h-28 flex bg-blue-200 rounded-xl justify-evenly">
            <div class="flex justify-center items-center w-[20%]">
                <div class=" flex items-center justify-center bg-blue-700  w-10 h-10 rounded-full ">
                    <img src="imglanding/MenuButtonWideFill.svg" alt="" width="60%">
                </div>
                <div class="flex flex-col justify-center ml-2">
                    <p class="font-inter text-gray-500">layanan Perpustakan</p>
                    <p>Lorem lorem lorem lorem</p>
                </div>
            </div>
            <div class="flex justify-center items-center w-[20%]">
                <div class=" flex items-center justify-center bg-blue-700  w-10 h-10 rounded-full ">
                    <img src="imglanding/ClockFill.svg" alt="" width="60%">
                </div>
                <div class="flex flex-col justify-center ml-2">
                    <p class="font-inter text-gray-500">layanan Perpustakan</p>
                    <p>Lorem lorem lorem lorem</p>
                </div>
            </div>
            <div class="flex justify-center items-center w-[20%]">
                <div class=" flex items-center justify-center bg-blue-700  w-10 h-10 rounded-full ">
                    <img src="imglanding/TelephoneFill.png" alt="" width="60%">
                </div>
                <div class="flex flex-col justify-center ml-2">
                    <p class="font-inter text-gray-500">layanan Perpustakan</p>
                    <p>Lorem lorem lorem lorem</p>
                </div>
            </div>
            <div class="flex justify-center items-center w-[20%]">
                <div class=" flex items-center justify-center bg-blue-700  w-10 h-10 rounded-full ">
                    <img src="imglanding/BrushFill.svg" alt="" width="60%">
                </div>
                <div class="flex flex-col justify-center ml-2">
                    <p class="font-inter text-gray-500">layanan Perpustakan</p>
                    <p>Lorem lorem lorem lorem</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full  bg-black mt-auto">
        <div class="w-full bg-black p-8">
            <div class="flex justify-center text-white">
                <p>CopyRight by FrederickAdventino2024</p>
            </div>
        </div>
    </div>
</body>

</html>