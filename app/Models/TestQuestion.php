<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{
    use HasFactory;
    protected $table = 'test_questions';
    protected $guarded = [
        'id',
        'updated_at',
        'created_at',
    ];

    public function answers()
    {
        return $this->hasMany(TestAnswer::class);
    }
}
