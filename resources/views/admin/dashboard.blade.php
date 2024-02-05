@extends('admin.layouts.app')
@section('title', 'Dashboard Admin')
@section('titleDashboard', 'Dashboard')
@section('dashboard')
    <main class="w-full h-full font-outfit">
        <div class="w-full flex justify-around items-center mt-4">
            <div class="flex w-[30%] items-center justify-center">
                <div class="w-[70%] bg-amber-500 hover:bg-yellow-600 h-32 p-3 rounded-3xl text-slate-100">
                    <i class="bi bi-book scale-150"></i>
                    <span>Jumlah Buku</span>
                    <p class="scale-x-150 scale-y-150 text-3xl p-6 mt-3 mr-4">144</p>
                </div>
            </div>
            <div class="flex w-[30%] items-center justify-center">
                <div class="w-[70%] bg-red-500 hover:bg-red-600 h-32 p-3 rounded-3xl text-slate-100">
                    <i class="bi bi-book scale-150"></i>
                    Buku Tersedia
                    <p class="scale-x-150 scale-y-150 text-3xl p-6 mt-3 mr-4">20</p>
                </div>
            </div>
            <div class="flex w-[30%] items-center justify-center">
                <div class="w-[70%] bg-green-600 hover:bg-green-700 h-32 p-3 rounded-3xl text-slate-100">
                    <i class="bi bi-book scale-150"></i>
                    Buku tidak tersedia
                    <p class="scale-x-150 scale-y-150 text-3xl p-6 mt-3 mr-4">34</p>
                </div>
            </div>
        </div>
        {{-- <div class="flex justify-center items-center w-[55%] bg-white h-24 p-3 rounded-2xl shadow-2xl drop-shadow-2xl mt-20">
            <div class="flex w-full justify-start items-center">
                <div class="w-1/12 flex justify-start items-start">
                    <i class="bi bi-clock-history scale-150 m-2"></i>
                </div>
            <div class="w-1/2 m-2">
                <p class="font-bold text-base">Status Terbaru</p>
                <p>Pemberitahuan Status Terbaru</p>
            </div>
            <div class="w-1/5 bg-cyan-600 rounded-3xl m-16">
                <p class="text-center"><a href="">View</a></p>
            </div>
        </div>
        <div class="flex justify-center items-center w-[55%] bg-white h-24 p-3 rounded-2xl shadow-2xl drop-shadow-2xl mt-6">
        </div> --}}
    </main>

@endsection


    {{-- <div class="flex w-full justify-start items-center">
        <div class="w-1/12 flex justify-start items-start">
          <i class="bi bi-clock-history scale-150 m-2"></i>
        </div>
        <div class="w-1/2 m-2">
            <p class="font-bold text-base">Status Terbaru</p>
            <p>Pemberitahuan Status Terbaru</p>
        </div>
        <div class="w-1/5 bg-cyan-600 rounded-3xl m-16">
            <p class="text-center"><a href="">View</a></p>
        </div>
        </div>
      </div> --}}

