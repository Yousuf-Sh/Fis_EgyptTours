<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CMS extends Model
{
    use HasFactory;
    protected $table='cms';
    protected $fillable = [
        'title',
        'short_description',
        'short_description1',
        'slug',
        'image'

       
    ];
    protected $guarded = [];

}
