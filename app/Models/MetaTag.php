<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaTag extends Model
{
    use HasFactory;
    protected $fillable = [
        'page',
        'meta_name',
        'meta_content',
        'sort'
    ];
}
