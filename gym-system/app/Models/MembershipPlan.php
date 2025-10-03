<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MembershipPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'duration_days', 'price'
    ];

    public function memberships()
    {
        return $this->hasMany(UserMembership::class, 'plan_id');
    }
}
