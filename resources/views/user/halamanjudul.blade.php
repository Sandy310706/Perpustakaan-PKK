@extends('user.layouts.app')

@section('title','haljudul')
@section('halamanjudul')
    <div class="">
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
    </div>
    <div class="w-auto flex items-center justify-center mt-12">
        <p class="scale-150">buku</p>
    </div>
    <div class="w-auto flex justify-around mx-72 mt-10">
        <div class="w-auto justify-around">
    <div class="w-auto flex items-center justify-around">
        <img src="{{ asset('img/Rectangle 14.png') }}" class="">
    </div>
    <div class="w-full flex items-start justify-start">
        <div class="w-auto">
        <h5 class="text-xl pt-4">Judul buku</h5>
        <h3 class="text-sm pt-1">Penulis</h3>
        <span class="text-red-600 rounded-lg text-xs py-1 px-1 mb-1 bg-red-200"><i class="fa-solid fa-circle mr-1 bg-red-800 rounded-lg"></i>Tidak tersedia</span>
    </div>
</div>
</div>
<div class="w-auto justify-center">
  <div class="w-auto flex items-center justify-around">
    <img src="{{ asset('img/Rectangle 14.png') }}" class="">
  </div>
  <div class="w-full flex items-start justify-start">
    <div class="w-auto">
      <h5 class="text-xl pt-4">Judul buku</h5>
      <h3 class="text-sm pt-1">Penulis</h3>
      <span class="text-green-600 rounded-lg text-xs py-1 px-1 mb-1 bg-green-200"><i class="fa-solid fa-circle mr-1 bg-green-800 rounded-lg"></i>tersedia</span>
  </div>
</div>
</div>
<div class="w-auto justify-center">
  <div class="w-auto flex items-center justify-around">
    <img src="{{ asset('img/Rectangle 14.png') }}" class="">
  </div>
  <div class="w-full flex items-start justify-start">
    <div class="w-auto">
      <h5 class="text-xl pt-4">Judul buku</h5>
      <h3 class="text-sm pt-1">Penulis</h3>
      <span class="text-red-600 rounded-lg text-xs py-1 px-1 mb-1 bg-red-200"><i class="fa-solid fa-circle mr-1 bg-red-800 rounded-lg"></i>Tidak tersedia</span>
  </div>
</div>
</div>
<div class="w-auto justify-center">
  <div class="w-auto flex items-center justify-around">
    <img src="{{ asset('img/Rectangle 14.png') }}" class="">
  </div>
  <div class="w-full flex items-start justify-start">
    <div class="w-auto">
      <h5 class="text-xl pt-4">Judul buku</h5>
      <h3 class="text-sm pt-1">Penulis</h3>
      <span class="text-red-600 rounded-lg text-xs py-1 px-1 mb-1 bg-red-200"><i class="fa-solid fa-circle mr-1 bg-red-800 rounded-lg"></i>Tidak tersedia</span>
  </div>
</div>
</div>
</div>
@endsection

