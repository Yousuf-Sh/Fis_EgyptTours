<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;




class Membership extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    

    protected $table = 'members_profile';
    protected $guarded = 'member';
    protected $fillable=[
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
