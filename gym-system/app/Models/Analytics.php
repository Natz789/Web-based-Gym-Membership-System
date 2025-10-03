<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Analytics extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 'total_members', 'total_passes', 'total_sales', 'age_group'
    ];
}
