<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date_of_birth',
        'address',
        'job_status',
        'company',
        'photo',
        'rombel',
        'rayon',
        'school_generation'
    ];
}
