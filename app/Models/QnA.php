<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QnA extends Model
{
    use HasFactory;

    public $table = 'qnas';

    protected $fillable = [
        'question',
        'answer',
    ];
}
