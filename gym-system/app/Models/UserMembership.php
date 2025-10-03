<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserMembership extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'plan_id', 'start_date', 'end_date', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(MembershipPlan::class, 'plan_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'membership_id');
    }
}
