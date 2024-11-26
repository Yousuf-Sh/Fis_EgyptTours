<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trusty extends Model
{
    protected $table = 'trusties';
    protected $fillable=[''];
    use HasFactory;
    
    public function MembersCat(){
        return $this->belongsTo(MembersCategory::class,'category_id','id');
    }
   
}
