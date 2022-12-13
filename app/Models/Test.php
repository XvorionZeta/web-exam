<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $table = 'tests';
    protected $guarded = [
        'id',
        'updated_at',
        'created_at',
    ];

    public function questions()
    {
        return $this->hasMany(TestQuestion::class);
    }
}
