<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Guru extends Authenticatable
{
    protected $table = 'guru';
    protected $guard = 'guru';

    public function role(){
        return $this->belongsTo(Role::class);
    }
}
