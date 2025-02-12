<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = ['title', 'due_date'];

    // Casting 'due_date' to 'date'
    protected $casts = [
        'due_date' => 'date',
    ];
}