<div class="w-screen top-0 p-4 flex bg-slate-100 shadow-sm animate__animated animate__backInDown fixed" style="z-index: 999;">
    <div class="w-[25%] h-full flex items-center">
        <img src="{{ asset('img/ikon.jpg') }}" class="h-14 w-14 mr-2" alt="navabar icon">
        <span class="font-robotoslab">Perpustakaan</span>
    </div>
    <div class="w-1/2 p-4 flex items-center justify-center font-outfit">
        <a href="" class="mr-10 hover:text-slate-400">Beranda</a>
        <a href="" class="mr-10 hover:text-slate-400">Judul</a>
        <a href="" class="mr-10 hover:text-slate-400">Penulis</a>
        <a href="" class="hover:text-slate-400">Tentang Kami</a>
    </div>
    <div class="w-[25%] p-4 flex items-center justify-end">
        <div class="mr-4 font-outfit">
            <button><i class="fa-solid fa-moon mr-4"></i></button>
            <a href="/login" class="hover:text-slate-500">Login</a>
            <button id="dropdownTrigger" onclick="openDropdownMenu()" class="hidden hover:text-slate-500">Welcome, Nama Pengguna</button>
        </div>
    </div>
</div>
<div id="dropdownMenu" class="hidden absolute top-16 right-5 bg-slate-200 rounded-md font-outfit">
    <div class="p-4 hover:bg-slate-300 rounded-t-md"><button>Pinjaman Buku</button></div>
    <hr class="border text-center border-gray-400 m-auto">
    <div class="p-4 hover:bg-slate-300 rounded-b-md"><button>Logout</button></div>
</div>

<script>
    function openDropdownMenu()
    {
        const dropdownMenu = document.getElementById('dropdownMenu')
        if(dropdownMenu.classList.contains('hidden')){
            dropdownMenu.classList.remove("hidden")
            dropdownMenu.classList.add('block')
            dropdownMenu.classList.add('animate-showDropdownMenu')
        } else {
            setTimeout(() => {
                dropdownMenu.classList.add('hidden')
            }, 500);
            dropdownMenu.classList.remove('block')
            dropdownMenu.classList.remove('animate-showDropdownMenu')
            dropdownMenu.classList.add('animate-hideDropdownMenu')
        }

    }
    const dropdownTrigger = document.getElementById("dropdownTrigger")
    const dropdownMenu = document.getElementById("dropdownMenu")
    document.addEventListener("click", function (event) {
        if (
            !dropdownTrigger.contains(event.target) &&
            !dropdownMenu.contains(event.target)
        ) {
            setTimeout(function() {
                dropdownMenu.classList.add("hidden");
            } , 400);
            dropdownMenu.classList.remove("animate-showDropdownMenu");
            dropdownMenu.classList.add("animate-hideDropdownMenu");
        }
    });
</script>
