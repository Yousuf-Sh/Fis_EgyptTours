<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $guarded=[];
   // protected $table = 'airportservices';

    // Define a one-to-one relationship with Servicesmenu based on pagelink
    // public function servicemenu()
    // {
    //     return $this->belongsTo(Servicesmenu::class, 'pagelink', 'pagelink');
    // }


   
}

