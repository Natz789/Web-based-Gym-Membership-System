<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WalkInPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'pass_id', 'customer_name', 'mobile_no', 'amount', 'method', 'payment_date'
    ];

    public function pass()
    {
        return $this->belongsTo(FlexibleAccess::class, 'pass_id');
    }
}
