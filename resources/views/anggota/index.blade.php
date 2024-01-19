<!-- resources/views/anggota/index.blade.php -->
@extends('layout')

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-8">Data Anggota Perpustakaan</h1>

        <!-- Tambah Anggota Button -->
        <a href="{{ route('anggota.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded mb-4 inline-block">Tambah Anggota</a>

        <!-- Display success or error messages -->
        @if(session('success'))
            <div class="bg-green-200 text-green-800 py-2 px-4 mb-4 rounded-md">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-200 text-red-800 py-2 px-4 mb-4 rounded-md">
                {{ session('error') }}
            </div>
        @endif

        <div class="bg-white p-4 rounded-md shadow-md mb-4">
            <!-- Table Header -->
            <div class="bg-gray-100 p-4 rounded-md mb-4">
            <div class="flex items-center">
                <div class="flex-1">Nama</div>
                <div class="flex-1">Email</div>
                <div class="flex-1">No. HP</div>
                <div class="flex-1">Alamat</div>
                <div class="flex-1"></div>
            </div>
        </div>
        <!-- List of Anggota -->
        @forelse($anggotaList as $anggota)
            <div class="bg-white p-4 rounded-md shadow-md mb-4">
                <div class="flex flex-col sm:flex-row items-center">
                    <div class="flex-1 sm:w-1/4 lg:w-1/5 mb-2 sm:mb-0">{{ $anggota->nama }}</div>
                    <div class="flex-1 hidden sm:block">{{ $anggota->email }}</div>
                    <div class="flex-1 hidden md:block">{{ $anggota->no_hp }}</div>
                    <div class="flex-1 lg:w-2/5">{{ $anggota->alamat }}</div>
                    <div class="flex-1 mt-2 sm:mt-0">
                        <a href="{{ route('anggota.show', $anggota->id) }}" class="text-blue-500 mr-2">Lihat Detail</a>
                        <a href="{{ route('anggota.edit', $anggota->id) }}" class="text-blue-500">Edit</a>
                        <a href="{{ route('anggota.delete', $anggota->id) }}" class="text-red-500">Hapus</a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-600">Tidak ada data anggota.</p>
        @endforelse
    </div>
@endsection
