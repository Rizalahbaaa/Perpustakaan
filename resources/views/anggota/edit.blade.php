@extends('layout')

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-8">Edit Anggota</h1>

        @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="{{ $anggota->nama }}" required>
            </div>

            <div class="mb-4">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $anggota->email }}" required>
            </div>

            <div class="mb-4">
                <label for="no_hp">No. Hp:</label>
                <input type="text" id="no_hp" name="no_hp" value="{{ $anggota->no_hp }}" required>
            </div>

            <div class="mb-4">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" value="{{ $anggota->alamat }}" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded mt-4">Perbarui Anggota</button>
        </form>
    </div>
@endsection
