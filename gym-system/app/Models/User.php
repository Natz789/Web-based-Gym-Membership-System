<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role',
        'mobile_no', 'address', 'birthdate', 'age'
    ];

    protected $hidden = [
        'password',
    ];

    // Relationships
    public function memberships()
    {
        return $this->hasMany(UserMembership::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
