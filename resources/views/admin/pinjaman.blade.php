@extends('admin.layouts.app')
@section('title', 'Kelola Pinjaman Siswa')
@section('titleDashboard', 'Pinjaman Siswa')
@section('pinjamansiswa')
    <table class="w-full text-center mt-4 rounded-t-md font-outfit">
        <thead class="bg-stone-600 text-white">
            <th class="rounded-tl-md">No</th>
            <th class="w-[20%]">Nama</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Dikembalikan</th>
            <th class="w-[10%]">Status</th>
            <th class="rounded-tr-md">Aksi</th>
        </thead>
        <tbody>
            <tr>
                <td class="p-2">1</td>
                <td>Erwin</td>
                <td>31 Desember 2022</td>
                <td>Melarikan diri</td>
                <td class="text-red-600 text-sm"><span class="bg-red-200 text-red-800 px-4 py-1 rounded-sm"><i class="fa-solid fa-triangle-exclamation"></i> Dicuri</span></td>
                <td><button class="py-1 px-3 rounded-md text-yellow-500"><i class="fa-solid fa-pencil"></i></button></td>
            </tr>
            <tr class="bg-slate-200">
                <td class="p-2">2</td>
                <td>Sandy</td>
                <td>31 Desember 2022</td>
                <td>8 Januari 2023</td>
                <td class="text-red-600 text-sm"><span class="bg-green-200 text-green-800 px-4 py-1 rounded-sm"><i class="fa-solid fa-circle-check"></i> Selesai</span></td>
                <td><button class="py-1 px-3 rounded-md text-yellow-500"><i class="fa-solid fa-pencil"></i></button></td>
            </tr>
            <tr>
                <td class="p-2">3</td>
                <td>Erwin</td>
                <td>31 Desember 2022</td>
                <td>Melarikan diri</td>
                <td class="text-red-600 text-sm"><span class="bg-red-200 text-red-800 px-4 py-1 rounded-sm"><i class="fa-solid fa-triangle-exclamation"></i> Dicuri</span></td>
                <td><button class="py-1 px-3 rounded-md text-yellow-500"><i class="fa-solid fa-pencil"></i></button></td>
            </tr>
        </tbody>
    </table>
@endsection
