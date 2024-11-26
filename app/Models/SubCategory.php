<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable=[

    ];

    public function category()
    {
        return $this->belongsTo(CommitteeCategory::class,'category_id','id');
    }
}
