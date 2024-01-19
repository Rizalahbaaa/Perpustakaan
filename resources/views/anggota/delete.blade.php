<!-- resources/views/anggota/delete.blade.php -->
@extends('layout')

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-8">Konfirmasi Hapus Anggota</h1>

        <div class="bg-white p-4 rounded-md shadow-md">
            <p>Anda yakin ingin menghapus anggota dengan nama: {{ $anggota->nama }}?</p>
                <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded mt-4">Hapus Anggota</button>
                <a href="{{ route('anggota.index') }}" class="bg-gray-400 text-white py-2 px-4 rounded">Batal</a>
            </form>
        </div>
    </div>
@endsection
