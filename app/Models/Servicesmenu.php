<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicesmenu extends Model
{
    public $timestamps = false;

    use HasFactory;
    public function service()
    {
        return $this->hasOne(Services::class, 'pagelink', 'pagelink');
    }
}
