<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasGuru extends Model
{
    use HasFactory;

    protected $table = 'kelas_guru';

    protected $fillable = [
        'uuid',
        'kelas_id',
        'guru_id',
    ];
}
