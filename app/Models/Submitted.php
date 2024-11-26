<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submitted extends Model
{
    public $timestamps = false;
//protected $fillable = ['logo','phone1', 'button', 'email', 'twittericon', 'facebookicon', 'instagramicon'];
    use HasFactory;
}
