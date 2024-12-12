<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $fillable = [
        'language', 
        'description', 
        'address', 
        'facebook', 
        'twitter', 
        'instagram', 
        'printest', 
        'linkdlin', 
        'redit', 
        'image', 
        'email', 
        'phone1', 
        'phone2'
    ];
    public $timestamps = false;
}
