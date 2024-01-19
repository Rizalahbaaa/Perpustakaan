<!-- resources/views/anggota/show.blade.php -->
@extends('layout')

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-4">Detail Anggota</h1>

        <div class="bg-white p-4 rounded-md shadow-md mb-4 grid grid-cols-1 md:flex md:flex-col">
            <div class="mb-4">
                <strong>Nama  :</strong> {{ $anggota->nama }}
            </div>
            <div class="mb-4">
                <strong>Email :</strong> {{ $anggota->email }}
            </div>
            <div class="mb-4">
                <strong>No.HP:</strong> {{ $anggota->no_hp }}
            </div>
            <div class="mb-4">
                <strong>Alamat:</strong> {{ $anggota->alamat }}
            </div>
        </div>
            </div>
@endsection
