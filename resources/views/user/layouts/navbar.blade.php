<div class="w-screen p-4 flex bg-slate-100 shadow-sm">
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
            <button><i class="fa-solid fa-moon mr-4"></i></button>
            <span>Login</span>
        </div>
    </div>
</div>
<div class="w-screen p-4">
    <div class="w-[40%] h-10 flex mx-auto border border-[#646464] rounded-md">
        <div class="w-[10%] h-full flex justify-center items-center border-r border-[#646464]">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="w-[90%] h-full flex items-center">
            <input type="text" class="w-full ml-4 outline-none placeholder:font-outfit" placeholder="Masukan Judul">
            <button class="px-6 py-1 mr-2 bg-cyan-400 rounded-md text-white font-outfit">Cari</button>
        </div>
    </div>
</div>
