<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentCategory extends Model
{
    use HasFactory;
    protected $table='department_category';
	protected $fillable=[
	
	];


	public function product()
	{

		return $this->hasMany(LiveProduct::class);
	}
		public function model()
	{

		return $this->hasMany(LiveModel::class);
	}
}
