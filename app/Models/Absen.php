<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Absen extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "absen";

    protected $fillable=[
        "uuid",
        "nama",
        "deskripsi",
        "kelas_id",
        "guru_id",
        "published",
        "date_start",
        "date_end",
        "time_start",
        "time_end"
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class,'kelas_id','id');
    }

    public function guru(){
        return $this->belongsTo(Guru::class,'guru_id','id');
    }

    public function siswa(){
        return $this->belongsToMany(Siswa::class,'absen_siswa','absen_id','siswa_id');
    }

    public function scopeByGuru($query,$guruId){
        return $query->where('guru_id','=',$guruId);
    }
}
