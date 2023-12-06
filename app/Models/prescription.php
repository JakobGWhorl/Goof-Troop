<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'Afternoon_med',
        'Night_med',
        'Morning_med',
        'comments',
        'Date'
    ];
}

