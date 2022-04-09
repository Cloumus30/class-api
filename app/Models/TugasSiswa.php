<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasSiswa extends Model
{
    use HasFactory;

    protected $table = 'tugas_siswa';

    protected $fillable =[
        'uuid',
        'tugas_id',
        'siswa_id'
    ];
}
