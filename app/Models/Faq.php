<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'question',
        'question_description',
        'question_ar',
        'question_description_ar',
    ];
}
