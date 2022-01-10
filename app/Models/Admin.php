<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    protected $table = 'admin';

    protected $fillable = [
        'nama',
        'username',
        'password',
    ];
    protected $hidden = [
        'password',
        
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }
}
