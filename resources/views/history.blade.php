<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<div class="w-auto flex items-center justify-center">
<p class="flex items-center mt-20 scale-150">History</p>
</div>
<div class="w-auto flex justify-center items-center mt-6">
<div class="w-[70%] flex items-start justify-start bg-slate-100 rounded-lg drop-shadow-2xl shadow-2xl">
  <div class="flex items-center justify-center mt-6 mx-1">
    <img src="{{ asset('img/Rectangle 14.png') }}" class="flex scale-90 w-auto h-60">
  </div>
        <div class="w-auto">
          <div class="w-full flex items-start justify-start mt-10">
            <div class="w-auto ml-4">  
              <p class="text-sm">444</p>
              <h5 class="text-xl">Erwin budianto</h5>
              <h3 class="text-sm">Rasis</h3>
              <div class="items-start justify-start my-12">
            <div class="w-full flex ">
              <div class="w-1/2">
                <p class="flex text-sm mt-12">1 Januari 2021 /</p>
                <p class="text-sm">Tidak diketahui</p>
              </div>
               <div class="w-1/2">
              <p class="flex text-green-500 ml-28 mt-12">dicuri</p>
            </div> 
            </div>
          </div>
        </div>
    </div >
</div>
</div>
</div>
<div class="w-auto flex justify-center items-center mt-6">
  <div class="w-[70%] flex items-start justify-start bg-slate-100 rounded-lg drop-shadow-2xl shadow-2xl">
    <div class="flex items-center justify-center mt-6 mx-1">
      <img src="{{ asset('img/Rectangle 14.png') }}" class="flex scale-90 w-auto h-60">
    </div>
          <div class="w-auto">
            <div class="w-full flex items-start justify-start mt-10">
              <div class="w-auto ml-4">  
                <p class="text-sm">444</p>
                <h5 class="text-xl">Erwin budianto</h5>
                <h3 class="text-sm">Rasis</h3>
                <div class="items-start justify-start my-12">
              <div class="w-full flex ">
                <div class="w-1/2">
                  <p class="flex text-sm mt-12">1 Januari 2021 /</p>
                  <p class="text-sm">Tidak diketahui</p>
                </div>
                 <div class="w-1/2">
                <p class="flex text-green-500 ml-28 mt-12">dicuri</p>
              </div> 
              </div>
            </div>
          </div>
      </div >
  </div>
  </div>
  </div>


  {{-- History2
    
@extends('user.layouts.app')

@section('title','haljudul')
@section('halamanjudul')
<body>
    <div class="w-auto flex items-center justify-center">
        <p class="flex items-center mt-10 m-3 scale-150">Pinjamkan Buku</p>
        </div>
        <div class="w-auto flex items-center justify-center">
            <img src="{{ asset('img/his.jpg') }}" class="flex scale-105 w-auto h-60">
            </div>
            <div class="w-auto flex items-center justify-center">
                <p class="flex items-center mt-16 scale-150">Kontol jonathan hilang dimakan erwin</p>
                </div>
</body>
@endsection