<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentList extends Model
{
    use HasFactory;
    protected $table='department_list';
    protected $fillable=[

    ];
    public function category()
    {
     return $this->belongsTo(DepartmentCategory::class,'category_id','id');
    }
}
