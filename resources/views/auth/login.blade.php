@extends('auth.layouts.app')
@section('title', 'Login')

@section('login')
    <div class="w-full h-full flex neutral-50 font-outfit overflow-hidden">
        <div class="w-[50%] h-screen">
            <div class="w-full h-full flex justify-center items-center">
                <img src="{{ asset('img/login.png') }}" class="w-[90%] h-[90%] object-cover animate-loginAsset" alt="asset login">
            </div>
        </div>
        <div class="w-[50%] h-screen flex ml-10 justify-center items-center">
            <div class="w-[70%] bg-white rounded-2xl border-2 border-stone-500 shadow-2xl py-4">
                <h1 class="text-center mb-8 text-4xl font-montserrat">L o g i n</h1>
                <form action="{{ route('ProsesLogin') }}" class="px-4 w-full flex flex-col items-center justify-center" method="POST">
                    @csrf
                    <div class="w-[70%] mb-4">
                        <label for="primaryKey" class="after:content-['*'] after:ml-0.5 after:text-red-500">NISN atau Email</label>
                        <div class="w-full flex border-[1.5px] border-zinc-500 rounded-lg py-2 px-1">
                            <span class="mx-2 scale-125"><i class="fa-regular fa-at"></i></span>
                            <input id="primaryKey" type="text" name="primaryKey" value="{{ old('primaryKey') }}" class="outline-none w-full h-full placeholder:font-nunitosans placeholder:text-md focus:bg-white" placeholder="Masukan NISN atau Email">
                        </div>
                        @error('primaryKey')
                            <div class="text-xs text-red-400 pl-2"><i class="fa-solid fa-triangle-exclamation pr-1"></i>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-[70%] mb-4">
                        <label for="password" class="after:content-['*'] after:ml-0.5 after:text-red-500">Password</label>
                        <div class="w-full flex border-[1.5px] border-zinc-500 rounded-lg py-2 px-1">
                            <span class="mx-2"><i class="fa-solid fa-key"></i></span>
                            <input id="password" type="password" name="password" class="outline-none w-full h-full placeholder:font-nunitosans placeholder:text-md" placeholder="Masukan Password">
                            <span onclick="change()" id="passwordtoggle" class="mr-2"><i class="fa-regular fa-eye"></i></span>
                        </div>
                        @error('password')
                            <div class="text-xs text-red-400 pl-2"><i class="fa-solid fa-triangle-exclamation pr-1"></i>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-[70%] flex flex-col items-center">
                        <button id="SubmitBtn" type="submit" class="SubmitBtn w-[60%] flex  justify-center items-center bg-blue-600 p-1 text-white rounded-lg hover:bg-blue-700 focus:ring-1 focus:ring-blue-800">
                            <span class="mr-2">L o g i n</span>
                        </button>
                        <span class="text-sm font-sans">Lupa password? <a onclick="alert('Silahkan hubungi Petugas !')" class="cursor-pointer text-blue-600 hover:underline">Reset</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function change()
        {
            var x = document.getElementById('password').type;
            if ( x == 'password'){
                document.getElementById('password').type = 'text';
                document.getElementById('passwordtoggle').innerHTML = '<i class="fa-regular fa-eye-slash"></i>';
            }else{
                document.getElementById('password').type = 'password';
                document.getElementById('passwordtoggle').innerHTML = '<i class="fa-regular fa-eye"></i>';
            }
        }
        $(document).ready(function(){
           $('body').on('click', '#SubmitBtn', function(){
                $(this).html("<i class='fa-solid fa-spinner animate-spin p-1'></i>")
           })
        })
    </script>
@endsection
