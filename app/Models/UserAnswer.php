<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    use HasFactory;
    protected $table = 'user_tests';
    protected $guarded = [
        'id',
        'updated_at',
        'created_at',
    ];
}
