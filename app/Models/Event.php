<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $table = 'events';

    protected $fillable = [
        'name',
        'description',
        'image',
        'category',
        'city',
        'date',
        'location',
        'address',
        'google_map_link',
        'google_map_embed',
        'attribute'
    ];
}
