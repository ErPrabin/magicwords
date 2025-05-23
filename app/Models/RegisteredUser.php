<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'event_id',
        'email',
        'contact_number',
        'note',
        'gender',
        'location',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
