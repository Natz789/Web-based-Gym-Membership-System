<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FlexibleAccess extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'duration_days', 'price'
    ];

    public function walkInPayments()
    {
        return $this->hasMany(WalkInPayment::class, 'pass_id');
    }
}
