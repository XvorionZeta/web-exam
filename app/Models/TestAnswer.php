<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestAnswer extends Model
{
    use HasFactory;
    protected $table = 'test_answer';
    protected $guarded = [
        'id',
        'updated_at',
        'created_at',
    ];
}
