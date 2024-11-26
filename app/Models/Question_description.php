<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question_description extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','question','question_description'];
    use HasFactory;
}
