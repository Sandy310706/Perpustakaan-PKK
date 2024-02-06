@extends('user.layouts.app')
@section('title', 'Home')
@section('landingpage')
    <section>
        <div class="flex mt-7 flex-col">
            <div class="w-full flex justify-evenly mt-5">
                <div class="flex flex-col justify-center items-center w-[50%]">
                    <div class="flex flex-col items-start">
                        <p class="text-5xl drop-shadow-xl font-robotoslab animate__animated animate__bounceInLeft animate__slow-4s ">Mecari dan Membaca</p>
                        <p class="font-robotoslab text-4xl animate__animated animate__bounceInLeft animate__slow-1s">Buku Untuk Menambah Ilmu</p>
                        <p class="font-robotoslab text-2xl animate__animated animate__bounceInLeft">Lorem lorem lorem lorem</p>
                    </div>
                </div>
                <div class="flex justify-start">
                    <img src="imglanding/landing.png" alt="" class="animate__animated animate__bounceInRight">
                </div>
            </div>
        </div>
    </section>

    <div class="w-full flex h-56 flex-row justify-between mt-32">
        <div class="flex items-start justify-center w-[20%]  ">
            <div class="w-[80%] h-40 p-3 bg-[#0C151D] mx-10 rounded-[10px]  flex flex-col shadow-[rgba(17, 17, 26, 0.1)_0px_1px_0px_rgba(17, 17, 26, 0.1)_0px_8px_24px_rgba(17, 17, 26, 0.1)_0px_16px_48px]">
                <div class="">
                    <h1 class="ml-2 mt-1 text-2xl text-white font-paythone">22</h1>
                </div>
                <div class="h-full flex items-end justify-center mb-2">
                    <p class="text-lg text-white font-outfit">Jumlah Buku</p>
                </div>
            </div>
        </div>
        <div class="flex items-end justify-center w-[20%]   ">
            <div class="w-[80%] h-40 p-3 bg-[#0C151D]  rounded-[10px]  shadow-2xl flex flex-col justify-end ">
                <div class="">
                    <h1 class="ml-2 mt-1 text-2xl text-white font-paythone">22</h1>
                </div>
                <div class="h-full flex items-end justify-center mb-2">
                    <p class="text-lg text-white font-outfit">Jumlah Penulis</p>
                </div>
            </div>
        </div>
        <div class="flex items-start justify-center w-[20%]  ">
            <div class="w-[80%] h-40 p-3 bg-[#0C151D]  mx-10  rounded-[10px]  shadow-2xl flex flex-col">
                <div class="">
                    <h1 class="ml-2 mt-1 text-2xl text-white font-paythone">22</h1>
                </div>
                <div class="h-full flex items-end justify-center mb-2 ">
                    <p class="text-xl text-white font-outfit">Jumlah Petugas</p>
                </div>
            </div>
        </div>
        <div class="flex items-end justify-center w-[20%]  ">
            <div class="w-[80%] h-40 p-3  bg-[#0C151D]  mx-10  rounded-[10px]  shadow-2xl flex flex-col">
                <div class="">
                    <h1 class="ml-2 mt-1 text-2xl text-white font-paythone">22</h1>
                </div>
                <div class="h-full flex items-end justify-center mb-2">
                    <p class="text-xl text-white font-outfit">Jumlah Pengguna</p>
                </div>
            </div>
        </div>
        <div class="flex items-start justify-center w-[20%]  ">
            <div class="w-[80%] h-40 p-3  bg-[#0C151D]  mx-10  rounded-[10px]  shadow-2xl flex flex-col">
                <div class="">
                    <h1 class="ml-2 mt-1 text-2xl text-white font-paythone">22</h1>
                </div>
                <div class="h-full flex items-end justify-center mb-2">
                    <p class="text-lg text-white font-outfit">Jumlah Pinjaman</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full flex-col  mt-32 ">
        <div class="flex justify-center">
            <h1 class="text-black text-5xl font-outfit">Buku</h1>
        </div>
        <div class="flex w-full justify-center">
            <div class="flex justify-center mt-10">
                <div class="flex justify-center mt-20 w-[90%] flex-wrap">
                    <div class="flex flex-col my-4 item-center">
                        <div class="flex justify-start flex-col my-3">
                            <div class="w-[80%] flex justify-center flex-col ">
                                <img src="imglanding/Rectangle 14.png" alt="" class="flex justify-center">
                                <div class="flex flex-col">
                                    <h1 class="flex">Judul Buku</h1>
                                    <p>dsds</p>
                                    <div class="bg-red-200 w-32 flex justify-around rounded-full mt-1">
                                        <div class=" flex items-center">
                                            <img src="imglanding/2Ellipse 45 (1).svg" alt="">
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
                            <div class="flex flex-col">
                                <h1 class="flex">Judul Buku</h1>
                                <p>dsds</p>
                                <div class="bg-red-200 w-32 flex justify-around rounded-full mt-1">
                                    <div class=" flex items-center">
                                        <img src="imglanding/2Ellipse 45 (1).svg" alt="">
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
                            <div class="flex flex-col">
                                <h1 class="flex">Judul Buku</h1>
                                <p>dsds</p>
                                <div class="bg-red-200 w-32 flex justify-around rounded-full mt-1">
                                    <div class=" flex items-center">
                                        <img src="imglanding/2Ellipse 45 (1).svg" alt="">
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
                            <div class="flex flex-col">
                                <h1 class="flex">Judul Buku</h1>
                                <p>dsds</p>
                                <div class="bg-red-200 w-32 flex justify-around rounded-full mt-1">
                                    <div class=" flex items-center">
                                        <img src="imglanding/2Ellipse 45 (1).svg" alt="">
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
                            <div class="flex flex-col">
                                <h1 class="flex">Judul Buku</h1>
                                <p>dsds</p>
                                <div class="bg-red-200 w-32 flex justify-around rounded-full mt-1">
                                    <div class=" flex items-center">
                                        <img src="imglanding/2Ellipse 45 (1).svg" alt="">
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
                            <div class="flex flex-col">
                                <h1 class="flex">Judul Buku</h1>
                                <p>dsds</p>
                                <div class="bg-red-200 w-32 flex justify-around rounded-full mt-1">
                                    <div class=" flex items-center">
                                        <img src="imglanding/2Ellipse 45 (1).svg" alt="">
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
                            <div class="flex flex-col">
                                <h1 class="flex">Judul Buku</h1>
                                <p>dsds</p>
                                <div class="bg-red-200 w-32 flex justify-around rounded-full mt-1">
                                    <div class=" flex items-center">
                                        <img src="imglanding/2Ellipse 45 (1).svg" alt="">
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
                            <div class="flex flex-col">
                                <h1 class="flex">Judul Buku</h1>
                                <p>dsds</p>
                                <div class="bg-red-200 w-32 flex justify-around rounded-full mt-1">
                                    <div class=" flex items-center">
                                        <img src="imglanding/2Ellipse 45 (1).svg" alt="">
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
                            <div class="flex flex-col">
                                <h1 class="flex">Judul Buku</h1>
                                <p>dsds</p>
                                <div class="bg-red-200 w-32 flex justify-around rounded-full mt-1">
                                    <div class=" flex items-center">
                                        <img src="imglanding/2Ellipse 45 (1).svg" alt="">
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
    </div>
    <div id="tentangkami" class="flex justify-center w-full mt-10">
        <div class="w-[50%] flex justify-center flex-col items-center">
            <h1 class="flex justify-center text-black text-3xl font-robotoslab">Tentang Kami</h1>
            <div class="mt-5">
                <p class="text-center text-xl font-outfit">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt
                    excepturi beatae fugiat corrupti tempora alias mollitia accusamus, velit veniam distinctio,
                    similique tempore corporis atque eius aspernatur fugit quia? Possimus repellendus perferendis autem
                    minima ut illo quo fuga iusto reprehenderit reiciendis nobis similique beatae facilis unde harum,
                    est quae voluptatibus praesentium.</p>
            </div>
        </div>
    </div>
    <div class="w-full flex justify-center my-16">
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
@endsection
