<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import DB dari namespace ini


class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan data dummy ke dalam tabel anggota
        DB::table('anggota')->insert([
            'nama' => 'John Doe',
            'email' => 'john@example.com',
            'no_hp' => '123456789',
            'alamat' => 'Jl. Contoh No. 123',
        ]);

        DB::table('anggota')->insert([
            'nama' => 'Jane Doe',
            'email' => 'jane@example.com',
            'no_hp' => '987654321',
            'alamat' => 'Jl. Contoh No. 456',
        ]);

        // Tambahkan data lain sesuai kebutuhan

        // Informasi bahwa seeder telah dijalankan
        $this->command->info('Seeder Anggota berhasil dijalankan.');
    }
}
