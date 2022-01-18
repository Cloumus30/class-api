<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use SoftDeletes;
    protected $table = 'admin';

    protected $fillable = [
        'uuid',
        'nama',
        'foto',
        'account_id',
    ];

    public function account(){
        return $this->belongsTo(Account::class,'account_id');
    }
}
