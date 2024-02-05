<div class="w-[90%] h-[95%] flex flex-col items-center text-white rounded-2xl">
    <div class="w-full h-[20%] flex flex-col justify-center items-center">
        {{-- <img src="{{ asset('img/ikon2.png') }}" class="" alt="sidebar img"> --}}
        <span class="text-white mt-7">Halaman Admin</span>
    </div>
    <hr class="w-[90%] border border-white my-5">
    <a href="{{ route('admin.dashboard') }}" class="block cursor-pointer w-[90%] mb-2 text-center p-1 rounded-md hover:bg-white hover:text-black {{ request()->is('dashboard') ? 'text-yellow-500' : '' }}">
        Dashboard
    </a>
    <a href="{{ route('KelolaBuku') }}" class="block cursor-pointer w-[90%] mb-2 text-center p-1 rounded-md hover:bg-white hover:text-black {{ request()->is('kelola-buku') ? 'text-yellow-500' : '' }}">
        Kelola Buku
    </a>
    <a class="block cursor-pointer w-[90%] mb-2 text-center p-1 rounded-md hover:bg-white hover:text-black">
        Pinjaman Siswa
    </a>
    <a class="block cursor-pointer w-[90%] text-center p-1 rounded-md hover:bg-white hover:text-black justify-self-end">
        Logout
    </a>
</div>
