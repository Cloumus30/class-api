<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = "tugas";
    
    protected $fillable =[
        "uuid",
        "nama",
        "deskripsi",
        "link",
        "nilai",
        "selesai",
        "available",
        "kelas_id",
        "guru_id",
        "start_at",
        "end_at",
    ];
}
