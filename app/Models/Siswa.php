<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    use SoftDeletes;
    protected $table = 'siswa';

    protected $fillable=[
        'id',
        "uuid",
        "nama",
        "foto",
        "account_id",
    ];

    public function account(){
        return $this->belongsTo(Account::class,'account_id');
    }

    public function absen(){
        return $this->belongsToMany(Absen::class,'absen_siswa','siswa_id','absen_id');
    }
}
