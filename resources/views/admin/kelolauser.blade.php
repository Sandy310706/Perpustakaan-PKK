@extends('admin.layouts.app')
@section('title', 'Kelola User')
@section('titleNav', 'Kelola User')
@section('kelolauser')
    <div class="w-full h-full flex flex-col">
        <div class="w-full h-full mt-2">
            <button id="modalBtn" class="px-4 py-2 bg-sky-400 rounded-lg text-white mb-2 drop-shadow-2xl">Tambah User</button>
            <table id="tabel-buku" class="w-full text-center bg-white drop-shadow-2xl rounded-t-xl rounded-b-xl">
                <thead class="bg-slate-100 font-normal border-b border-slate-400">
                    <td class="rounded-tl-xl p-4 w-[25%]">Email / NISN</td>
                    <td class="w-[25%]">NISN</td>
                    <td class="w-[25%]">Nama</td>
                    <td class="w-[10%]">Role</td>
                    <td class="rounded-tr-xl w-[15%]">Aksis</td>
                </thead>
                <tbody id="tbody" class="text-sm font-light text-gray-500">
                </tbody>
            </table>
        </div>
        <div class="hidden w-screen h-screen bg-black bg-opacity-60 absolute top-0 right-0" style="z-index: 900;" id="background">
        </div>
        <div class="w-full flex justify-center">
            <div id="modal" class="hidden w-1/2 p-4 absolute top-8 bg-white rounded-lg drop-shadow-2xl" style="z-index: 1000;">
                <button id="closeModal" onclick="closeModal()" class="absolute top-0 right-0 p-2 m-2 text-gray-700 hover:text-red-500 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <h1 id="titleModal" class="text-2xl mb-6"></h1>
                <form id="formUser" class="w-full">
                    <div class="w-[80%] flex flex-col mb-2">
                        <label for="primarykey">Email atau NISN</label>
                        <input type="text" name="primarykey" id="primarykey" placeholder="Masukan Email atau NISN Buku" class="p-2 border-2 rounded-md border-[#AFABAB] outline-none">
                        <span id="errorPrimarykey" class="text-xs hidden text-red-500 ml-1"></span>
                    </div>
                    <div class="w-[80%] flex flex-col mb-2">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" placeholder="Masukan Nama" class="p-2 border-2 rounded-md border-[#AFABAB] outline-none">
                        <span id="errorNama" class="text-xs hidden text-red-500 ml-1"></span>
                    </div>
                    <div class="w-[80%] flex justify-between">
                        <div class="w-[48%] flex flex-col mb-2">
                            <label for="password">Password</label>
                            <div class="w-full flex p-2 border-2 rounded-md border-[#AFABAB] outline-none">
                                <input id="password" type="password" name="password" class="outline-none w-full h-full placeholder:font-nunitosans placeholder:text-md" placeholder="Masukan Password">
                                <span onclick="change()" id="passwordtoggle" class="mr-2"><i class="fa-regular fa-eye"></i></span>
                            </div>
                            <span id="errorPassword" class="text-xs hidden text-red-500 ml-1"></span>
                        </div>
                        <div class="w-[48%] flex flex-col mb-2">
                            <label for="role">Role</label>
                            <select name="role" id="role" placeholder="Pilih Role" class="p-2 border-2 rounded-md border-[#AFABAB] outline-none">
                            <option value="siswa">Siswa</option>
                            <option value="admin">Admin</option>
                            <span id="errorRole" class="text-xs hidden text-red-500 ml-1"></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('DataUser') }}",
                type: 'get',
                dataType: 'json',
                success: function(data){
                    const tbody = $('#tbody')
                    tbody.empty()
                    $.each(data, function (index, item) {
                        var row = "<tr class='border-b border-slate-200' data-item-id='" + item.id + "'>" +
                            "<td class='p-4 text-black'>" + item.nisn + '</td>' +
                            "<td>" + item.email + '</td>' +
                            "<td>" + item.nama + '</td>' +
                            "<td>" + item.role + '</td>' +
                            "<td><a href='javascript:void(0)' data-id='" + item.id + "' class='detail text-blue-600 mr-2'>Detail</a><a href='javascript:void(0)' data-id='" + item.id + "' class='edit text-yellow-600 mr-2'>Edit</a><a href='javascript:void(0)' data-id='" + item.id + "' class='hapus text-red-600'>Hapus</a></td>";
                            '</tr>';
                        tbody.append(row);
                    });
                }
            })
            $('#modalBtn').click( function(){
                $("#modal").removeClass('hidden');
                $('#modal').removeClass('animate-hideModal')
                $("#modal").addClass("animate-showModal")
                $('#background').removeClass('hidden')
                $("#titleModal").html("Tambah User")
            })
        })
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
        function closeModal() {
            const modal = document.getElementById("modal");
            const background = document.getElementById("background");
            setTimeout(() => {
                modal.classList.add("hidden");
                background.classList.add('hidden');
            }, 900);
            modal.classList.remove("animate-showModal");
            modal.classList.add("animate-hideModal");
        }
    </script>
@endsection
