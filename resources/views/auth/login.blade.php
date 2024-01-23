@extends('auth.layouts.app')
@section('title', 'Halaman Login')

@section('login')
    <div class="w-full h-full flex bg-neutral-50">
        <div class="w-[40%] h-screen">
            <div class="w-[40%] bg-cover bg-center absolute top-0 left-32 flex justify-end">
                <img src="{{ asset('img/loginAsset.png') }}" class="h-screen w-full object-cover" alt="asset login">
            </div>
        </div>
        <div class="w-[60%] h-screen flex ml-10 justify-center items-center">
            <div class="w-[60%] h-1/2 bg-white rounded-2xl border-2 border-stone-500 shadow-2xl py-4">
                <h1 class="text-center mb-8 text-4xl font-montserrat">L o g i n </h1>
                <form action="" class="px-4 w-full flex flex-col items-center justify-center" method="POST">
                    @csrf
                    <div class="w-[70%] flex border-[1.5px] border-zinc-500 rounded-lg py-2 px-1 mb-4">
                        <span class="mx-2 scale-125"><i class="fa-regular fa-user mb-1"></i></span>
                        <input type="text" class="outline-none w-full h-full placeholder:font-nunitosans placeholder:text-md" placeholder="Masukan Username">
                    </div>
                    <div class="w-[70%] flex border-[1.5px] border-zinc-500 rounded-lg py-2 px-1">
                        <span class="mx-2 scale-125"><i class="bi bi-key-fill"></i></span>
                        <input type="password" id="password" class="outline-none w-full h-full placeholder:font-nunitosans" placeholder="Masukan Password">
                        <span onclick="change()" id="passwordtoggle" class="mr-2"><i class="fa-solid fa-eye-slash"></i></span>
                    </div>
                    <div class="w-[70%] mt-5 flex flex-col items-center">
                        <button class="w-[60%] bg-[#0178F7] p-1 text-white rounded-lg">L o g i n</button>
                        <span class="text-sm font-sans">Lupa password? <a href="#" onclick="alert('Silahkan ke admin')" class="text-blue-600">Reset</a></span>
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
                document.getElementById('passwordtoggle').innerHTML = '<i class="fa-solid fa-eye"></i>';
            }else{
                document.getElementById('password').type = 'password';
                document.getElementById('passwordtoggle').innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
            }
        }
    </script>
@endsection
