<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'synopsis',
        'description',
        'location',
        'image',
        'capacity',
        'start_at',
        'completed_at',
        'sort',
    ];
    protected $appends = ['user_registered'];

    public function registeredUsers()
    {
        return $this->hasMany(RegisteredUser::class);
    }

    public function getUserRegisteredAttribute()
    {
        return $this->registeredUsers()->count();
    }
}
