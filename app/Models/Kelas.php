<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'kelas';

    protected $fillable=[
        "uuid",
        "nama_kelas",
        "deskripsi",
    ];

    public function absen(){
        return $this->hasMany(Absen::class,'kelas_id','id');
    }
    
}
