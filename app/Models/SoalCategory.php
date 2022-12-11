<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalCategory extends Model
{
    use HasFactory;
    protected $table = 'soal_category';
    protected $guarded = [
                         'id',
                         'created_at',
                         'updated_at',
    ];
}
