<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable =[
    'secondary_id',    
    'title',
    'language',
    'type',
    'image',
    'feature1',
    'feature2',
    'feature3',
    'price',
    'discount_price',
    ];
}
