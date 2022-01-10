<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';

    public function guru(){
        return $this->hasMany(Guru::class);
    }
    public function admin(){
        return $this->hasMany(Admin::class);
    }
}
