@extends('user.layouts.app')

@section('title','haljudul')
@section('halamanjudul')
    {{-- <div class="">
        <div class="w-full flex items-center justify-center">
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">A</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">B</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">C</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">D</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">E</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">F</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">G</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">H</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">I</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">J</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">K</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">L</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">M</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">N</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">O</a>
        </div>
        <div class="w-full flex items-center justify-center mt-4">
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">P</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">Q</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">R</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">S</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">T</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">U</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">V</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">W</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">X</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">Y</a>
            <a class="px-2 py-1 mr-2 p-1 bg-black text-sky-50 flex items-center rounded-md scale-110">Z</a>
        </div>
    </div> --}}
    <div class="w-screen p-4">
        <div class="w-[40%] h-10 flex mx-auto border border-[#646464] rounded-md">
            <div class="w-[10%] h-full flex justify-center items-center border-r border-[#646464]">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="w-[90%] h-full flex items-center">
                <input type="text" class="w-full bg-transparent ml-4 outline-none placeholder:font-outfit" placeholder="Masukan Judul">
                <button class="px-6 py-1 mr-2 bg-cyan-400 rounded-md text-white font-outfit">Cari</button>
            </div>
        </div>
    </div>
   <div class="w-full h-full flex justify-center gap-4 flex-wrap">
    @foreach ($buku as $data)
        <a href="/detail/{{ $data->id }}" class="block w-[20%] h-60 mb-2 box-border py-4 rounded-md">
            <div class="w-full h-28 flex justify-start items-center">
                <img src="{{ asset('storage/FotoCoverBuku/'. $data->foto) }}" class="object-cover object-center h-28 w-48 rounded-md">
            </div>
            <div class="w-full flex flex-col items-start justify-center mt-1 font-outfit">
                <h1 class="text-xl">{{ $data->judul }}</h1>
                <h2 class="text-sm text-slate-400 mb-1">{{ $data->penulis }}</h2>
                @if ($data->stok = 0)
                    <span class="p-1 bg-red-200 text-red-800 text-xs rounded-md font-worksans"><i class="fa-solid fa-circle mr-1"></i>Tidak Tersedia</span>
                @else
                    <span class="p-1 bg-green-200 text-green-800 text-xs rounded-md font-worksans"><i class="fa-solid fa-circle mr-1"></i>Tersedia</span>
                @endif
            </div>
        </a>
    @endforeach
   </div>
@endsection


