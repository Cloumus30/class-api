<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;

    protected $table = "absen";

    protected $fillable=[
        "uuid",
        "nama",
        "deskripsi",
        "kelas_id",
        "guru_id",
        "siswa_id",
        "available",
        "start_at",
        "end_at",
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class,'kelas_id','id');
    }

    public function guru(){
        return $this->belongsTo(Guru::class,'guru_id','id');
    }
}
