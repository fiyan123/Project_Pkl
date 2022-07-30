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
    public function siswa()
    {
        // data dari model 'Siswa' bisa dimiliki
        // oleh model 'kelas' melalui 'id_kelas'
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function kelas()
    {
        // data dari model 'Kelas' bisa memiliki 1 data
        // dari model 'siswa' melalui id_kelas
        return $this->hasOne(Kelas::class, 'id_kelas');
    }
}
