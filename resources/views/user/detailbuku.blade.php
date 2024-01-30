@extends('user.layouts.app')
@section('title', 'Nama Buku')
@section('detailbuku')
<div class="w-full flex justify-center mt-5">
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
@endsection
