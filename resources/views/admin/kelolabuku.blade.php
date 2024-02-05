@extends('admin.layouts.app')
@section('title', 'Kelola Buku')
@section('titleDashboard', 'Kelola Buku')

@section('kelolabuku')
    <div class="w-full h-full flex flex-col">
        <div class="hidden w-screen h-screen bg-black bg-opacity-60 absolute top-0 right-0" style="z-index: 900;" id="background">
        </div>
        <div class="w-full flex justify-center">
            {{-- <div id="detail" class="bg-white absolute top-8 p-4 w-[70%] rounded-lg drop-shadow-2xl" style="z-index: 1000;">
                Satu
            </div> --}}
            <div id="modal" class="hidden w-[70%] p-4 absolute top-8 bg-white rounded-lg drop-shadow-2xl" style="z-index: 1000;">
                <button id="closeModal" onclick="closeModal()" class="absolute top-0 right-0 p-2 m-2 text-gray-700 hover:text-red-500 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <h1 id="titleModal" class="text-2xl mb-6"></h1>
                <form id="newData" class="w-full">
                    <div class="flex justify-between mb-2">
                        <div class="w-[48%] flex flex-col">
                            <label for="kode">Kode Buku</label>
                            <input type="text" name="kode" id="kode" placeholder="Masukan Kode Buku" class="p-2 border-2 rounded-md border-[#AFABAB] outline-none">
                            <span id="errorKode" class="text-xs hidden text-red-500 ml-1"></span>
                        </div>
                    </div>
                    <div class="flex justify-between mb-2">
                        <div class="w-[48%] flex flex-col">
                            <label for="judul">Judul Buku</label>
                            <input type="text" name="judul" id="judul" placeholder="Masukan Judul" class="p-2 border-2 rounded-md border-[#AFABAB] outline-none">
                            <span id="errorJudul" class="text-xs hidden text-red-500 ml-1"></span>
                        </div>
                        <div class="w-[48%] flex flex-col">
                            <label for="penulis">Penulis</label>
                            <input type="text" name="penulis" id="penulis" placeholder="Masukan Nama Penulis" class="p-2 border-2 rounded-md border-[#AFABAB] outline-none">
                            <span id="errorPenulis" class="text-xs hidden text-red-500 ml-1"></span>
                        </div>
                    </div>
                    <div class="flex flex-col w-full mb-2">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" placeholder="Masukan Deskripsi" rows="4" class="w-full border-2 rounded-md border-[#AFABAB] outline-none p-2 text-sm placeholder:text-base"></textarea>
                        <span id="errorDeskripsi" class="text-xs hidden text-red-500 ml-1"></span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <div class="w-[48%] flex flex-col">
                            <label for="stok">Stok</label>
                            <input type="text" name="stok" id="stok" placeholder="Masukan jumlah Stok" class="p-2 border-2 rounded-md border-[#AFABAB] outline-none">
                            <span id="errorStok" class="text-xs hidden text-red-500 ml-1"></span>
                        </div>
                        <div class="w-[48%] flex flex-col mb-2">
                            <label for="img">Cover Buku</label>
                            <input type="file" name="img" id="img">
                            <span id="errorImg" class="text-xs hidden text-red-500 ml-1"></span>
                        </div>
                    </div>
                    <div class="w-full flex justify-end">
                        <button onclick="closeModal()" type="button" class="w-[15%] py-1 rounded-sm bg-slate-400 hover:bg-slate-500 text-white mr-1">Tutup</button>
                        <button id="saveBtn" class="w-[15%] py-1 rounded-sm bg-sky-300 hover:bg-sky-400 text-white">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="self-end mt-2">
            <button id="modalBtn" class="p-2 bg-gradient-to-r from-blue-400 to-blue-600 text-white rounded-md hover:from-blue-600 hover:to-blue-400 focus:ring-1 focus:ring-slate-700">Tambah Buku</button>
        </div>
        <div class="w-full h-full mt-2">
            <table id="tabel-buku" class="w-full text-center bg-white drop-shadow-2xl rounded-t-xl rounded-b-xl">
                <thead class="bg-slate-100 font-normal border-b border-slate-400">
                    <td class="rounded-tl-xl p-4 w-[10%]">Kode Buku</td>
                    <td class="w-[30%]">Judul Buku</td>
                    <td class="w-[30%]">Penulis</td>
                    <td class="w-[15%]">Stok</td>
                    <td class="rounded-tr-xl w-[15%]">Aksi</td>
                </thead>
                <tbody id="tbody" class="text-sm font-light text-gray-500">
                </tbody>
            </table>
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
                url: "{{ route('Buku') }}",
                type: 'get',
                dataType: 'json',
                success: function(data){
                    const tbody = $('#tbody')
                    tbody.empty()
                    $.each(data, function (index, item) {
                        var row = "<tr class='border-b border-slate-200'>" +
                            "<td class='p-4 text-black'>" + item.kodebuku + '</td>' +
                            "<td>" + item.judul + '</td>' +
                            "<td>" + item.penulis + '</td>' +
                            "<td>" + item.stok + '</td>' +
                            "<td><a href='javascript:void(0)' data-id='" + item.id + "' class='text-blue-600'>Detail</a></td>";
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
                $("#titleModal").html("Tambah Buku")
                var isSubmitting = false;
                $('#newData').submit( function(e) {
                    e.preventDefault()
                    if (isSubmitting) {
                        return;
                    }
                    isSubmitting = true;
                    $('#saveBtn').html('Menambahkan...')
                    $.ajax({
                        data: new FormData(this),
                        type: 'post',
                        url: "{{ route('TambahBuku') }}",
                        processData:false,
                        contentType:false,
                        success: function(data){
                            var isSubmitting = false;
                            Swal.fire({
                                title: 'Berhasil',
                                text: 'Buku berhasil ditambahkan!',
                                icon: 'success',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK',
                                zIndex: 9999,
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    setTimeout(() => {
                                        $('#modal').addClass('hidden')
                                        $('#background').addClass('hidden')
                                    }, 900);
                                    $('#newData').trigger("reset")
                                    $('#modal').addClass('animate-hideModal')
                                    $('#modal').removeClass('animate-showModal')
                                    var newRow = "<tr class='border-b border-slate-200'>" +
                                    '<td class="p-4 text-black">' + data.success.kodebuku + '</td>' +
                                    '<td>' + data.success.judul + '</td>' +
                                    '<td>' + data.success.penulis + '</td>' +
                                    '<td>' + data.success.stok + '</td>' +
                                    "<td><a href='javascript:void(0)' data-id='" + data.success.id + "' class='text-blue-600'>Detail</a></td>" +
                                    '</tr>';
                                    $("tbody").append(newRow)
                                    $("#newData")[0].reset();
                                }
                            })
                        },
                        error : function(error) {
                            let pesanError = error.responseJSON.errors
                            console.log(error)
                            $('#errorKode').removeClass('hidden')
                            $('#errorKode').html(pesanError.kode)
                            $('#errorPenulis').removeClass('hidden')
                            $('#errorPenulis').html(pesanError.penulis)
                            $('#errorJudul').removeClass('hidden')
                            $('#errorJudul').html(pesanError.judul)
                            $('#errorDeskripsi').removeClass('hidden')
                            $('#errorDeskripsi').html(pesanError.deskripsi)
                            $('#errorStok').removeClass('hidden')
                            $('#errorStok').html(pesanError.stok)
                            $('#errorImg').removeClass('hidden')
                            $('#errorImg').html(pesanError.img)
                            $('#saveBtn').html('Simpan')
                        }
                    })
                })
            })
            $(document).on('invalid-form.validate', '#newData', function () {
                return false;
            });
        })
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
