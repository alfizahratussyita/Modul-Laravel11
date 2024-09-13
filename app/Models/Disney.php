<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disney extends Model
{
    use HasFactory;

    protected $table = 'disneys';

    protected $fillable = [
        'character_name',
        'retired_at',
    ];

    protected $dates = [
        'retired_at',
    ];
}
