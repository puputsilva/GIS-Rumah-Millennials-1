<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public $table = 'teams';
    protected $fillable = [
        'name',
        'position',
        'image',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
    ];
}
