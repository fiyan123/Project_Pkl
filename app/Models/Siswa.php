<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    public $fillable = ['nis', 'nama', 'jenis_kelamin' , 'id_kelas'];
    public $timestamps = true;

    // membuat relasi one to one di model
    public function kelas()
    {
        // data dari model 'Siswa' bisa dimiliki
        // oleh model 'kelas' melalui 'id_kelas'
        return $this->hasMany(Kelas::class, 'id_kelas');
    }

}
