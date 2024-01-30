@extends('admin.layouts.app')
@section('dashboard')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<p class="text-4xl">Dashboard</p>
<div class="flex justify-center items-center">
    <div class="flex w-full items-center justify-center mt-10">
      <div class="w-48 bg-amber-500  hover:bg-yellow-600 active:bg-yellow-600 h-32 p-3 rounded-3xl text-slate-100">
        <i class="bi bi-book scale-150"></i>
        Jumlah Buku
        <p class="scale-x-150 scale-y-150 text-3xl p-6 mt-3 mr-4">144</p>   
      </div>
    </div>
    <div class="flex w-full items-center justify-center mt-10">
      <div class="w-48 bg-red-500 hover:bg-red-600 active:bg-red-600 h-32 p-3 rounded-3xl text-slate-100">
        <i class="bi bi-book scale-150"></i>
        Buku Tersedia
        <p class="scale-x-150 scale-y-150 text-3xl p-6 mt-3 mr-4">20</p>   
      </div>
    </div>
    <div class="flex w-full items-center justify-center mt-10">
      <div class="w-48 bg-green-700  hover:bg-green-600 active:bg-green-700 h-32 p-3 rounded-3xl text-slate-100">
        <i class="bi bi-book scale-150"></i>
        Buku tidak tersedia
        <p class="scale-x-150 scale-y-150 text-3xl p-6 mt-3 mr-4">34</p>   
      </div>
    </div>
</div>
<div class="flex justify-center items-center w-[55%] bg-white h-24 p-3 rounded-2xl shadow-2xl drop-shadow-2xl mt-20">
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
</div>

<div class="flex justify-center items-center w-[55%] bg-white h-24 p-3 rounded-2xl shadow-2xl drop-shadow-2xl mt-6">
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
  </div>

@endsection



