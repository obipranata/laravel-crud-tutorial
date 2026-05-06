<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalonSiswa extends Model
{
    protected $table = 'calon_siswa';
    protected $fillable = ['nama', 'alamat', 'jenis_kelamin', 'agama', 'sekolah_asal'];
    public $timestamps = false;
}
