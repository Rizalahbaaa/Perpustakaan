<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';

    protected $fillable = ['nama', 'email', 'no_hp', 'alamat'];

    public static function getAllAnggota()
    {
        return self::all();
    }

    public static function getAnggotaById($id)
    {
        return self::find($id);
    }
    public static function rules($id = null)
    {
        return [
            'nama' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('anggota')->ignore($id),
            ],
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
        ];
    }
}