<!-- resources/views/anggota/create.blade.php -->
@extends('layout')

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-8">Tambah Anggota Baru</h1>

        <!-- Form Create -->
        <form action="{{ route('anggota.store') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block text-gray-600">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-input mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-600">Email :</label>
                <input type="email" name="email" id="email" class="form-input mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="no_hp" class="block text-gray-600">No. HP:</label>
                <input type="text" name="no_hp" id="no_hp" class="form-input mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="alamat" class="block text-gray-600">Alamat:</label>
                <textarea name="alamat" id="alamat" class="form-input mt-1 block w-full" rows="4" required></textarea>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Simpan</button>
            </div>
        </form>
    </div>
@endsection
