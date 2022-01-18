<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Guru extends Authenticatable
{
    use SoftDeletes;
    protected $table = 'guru';
    
    protected $fillable =[
        "uuid",
        "nama",
        "email",
        "foto",
        "account_id",
    ];

    public function account(){
        return $this->belongsTo(Account::class,'account_id');
    }
}
