<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $table = 'services';
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
    'description',
'duration',
           'location',
                'pickup',
                'pickup_type',
                'availability',

'title_ex',
'description_ex',
    
                
    ];
}
