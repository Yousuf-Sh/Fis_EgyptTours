<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredMembers extends Model
{
    protected $table = 'members_profile';
    protected $fillable=[''];
    use HasFactory;
    public function country()
    {
     return $this->belongsTo(Country::class,'country_id','id');
    }
}
