<?php

// app/Http/Controllers/AnggotaController.php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
    {
    public function index()
    {
        $anggotaList = Anggota::getAllAnggota();

    return view('anggota.index', ['anggotaList' => $anggotaList]);
    }


    public function create()
    {
        return view('anggota.create');
    }
    
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);
    
        // Simpan data ke dalam database
        DB::table('anggota')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect('/anggota')->with('success', 'Data anggota berhasil ditambahkan.');
    }

    public function show($id)
    {
        $anggota = Anggota::getAnggotaById($id);

        return view('anggota.show', compact('anggota'));
    }

    public function edit($id)
    {
        $anggota = Anggota::find($id);

        if (!$anggota) {
            return redirect()->route('anggota.index')->with('error', 'Anggota tidak ditemukan');
        }

        return view('anggota.edit', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
        $anggota = Anggota::find($id);

        if (!$anggota) {
            return redirect()->route('anggota.index')->with('error', 'Anggota tidak ditemukan');
        }

        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'no_hp' => 'required|string',
            'alamat' => 'required|string',
            // tambahkan validasi lain sesuai kebutuhan
        ]);

        // Update data anggota
        $anggota->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil diperbarui');
    }

    public function delete($id)
    {
        $anggota = Anggota::find($id);

        if (!$anggota) {
            return redirect()->route('anggota.index')->with('error', 'Anggota tidak ditemukan');
        }
    
        // Tampilkan konfirmasi penghapusan di view delete.blade.php
        return view('anggota.delete', compact('anggota'));   
     }
    
    public function destroy($id)
    {
    $anggota = Anggota::find($id);

    if (!$anggota) {
        return redirect()->route('anggota.index')->with('error', 'Anggota tidak ditemukan');
    }

    // Lakukan penghapusan anggota
    $anggota->delete();

    return redirect()->route('anggota.index')->with('success', 'Anggota berhasil dihapus');
    }
    }