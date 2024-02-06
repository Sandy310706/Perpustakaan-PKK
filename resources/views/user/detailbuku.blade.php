@extends('user.layouts.app')
@section('title', $detail->judul )
@section('detailbuku')
<div class="w-full flex justify-center mt-5">
    <div class="w-[80%] flex">
        <div class="w-[40%] h-96 bg-black rounded-md">
            <img src="{{ asset('storage/FotoCoverBuku/'. $detail->foto) }}" class=" w-full h-full rounded-md" alt="gambar buku">
        </div>
        <div class="w-[60%] px-4 py-2">
            <p class="font-outfit mb-3">ISBN : <span class="text-slate-400">{{ $detail->kodebuku }}</span></p>
            <h1 class="text-4xl font-robotoslab">{{ $detail->judul }}</h1>
            <h2 class="text-md font-outfit mb-2">Penulis : <span class="text-yellow-400">{{ $detail->penulis }}</span></h2>
            @if ($detail->stok = 0)
                <span class="p-1 bg-red-200 text-red-800 text-sm rounded-md font-worksans"><i class="fa-solid fa-circle mr-1"></i>Tidak Tersedia</span>
            @else
                <span class="p-1 bg-green-200 text-green-800 text-sm rounded-md font-worksans"><i class="fa-solid fa-circle mr-1"></i>Tersedia</span>
            @endif
            <hr class="my-4 border-gray-400">
            <p class="text-neutral-500 font-robotoslab">{{ $detail->deskripsi }}</p>
            <div>
                <form id="pinjam" method="post" class="inline">
                    <button id="button" type="submit" data-id="{{ $detail->id }}" class="mt-2 px-10 py-1 bg-black rounded-md text-white font-outfit mr-2">Pinjam</button>
                </form>
                <button class=""><i class="fa-regular fa-bookmark text-2xl"></i></button>
            </div>
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
        $('#pinjam').submit(function(e){
            e.preventDefault()
            var Id = $('#button').data('id');
            Swal.fire({
                    title: 'Konfirmasi',
                    text: 'Apakah Anda yakin ingin meminjam buku ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Batal',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                }).then((result) => {
                    if(result.isConfirmed){
                        $.ajax({
                            type: 'post',
                            url: '/pinjaman/'+ Id,
                            success: function(response)
                            {
                                Swal.fire('Diproses!', 'Peminjaman di proses.', 'success');
                            }
                        })
                    }
                })
        })
    })
   </script>
@endsection
