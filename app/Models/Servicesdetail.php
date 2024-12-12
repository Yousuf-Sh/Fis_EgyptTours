<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicesdetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'source',
        'destination',
        'passengers',
        'bags',
        'price',
        'type',
        'secondary_id',
        'image',
        'language',
        'services_id',
        'gallery_image',
        'created_at',
        'updated_at',
    ];
    
}
