<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    public $fillable = ['id_siswa', 'id_guru', 'id_kelas'];
    public $timestamps = true;

    public function kelas()
    {
        // data dari model 'Siswa' bisa dimiliki
        // oleh model 'kelas' melalui 'id_kelas'
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function siswa()
    {
        // data dari model 'Siswa' bisa dimiliki
        // oleh model 'kelas' melalui 'id_kelas'
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    public function guru()
    {
        // data dari model 'Siswa' bisa dimiliki
        // oleh model 'kelas' melalui 'id_kelas'
        return $this->belongsTo(Guru::class, 'id_guru');
    }

}
