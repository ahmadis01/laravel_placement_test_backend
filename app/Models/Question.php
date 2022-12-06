<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'questionText',
        'mark',
        'language_id',
        'questionType_id',
        'record_id',
        'text_id'
    ];
}
