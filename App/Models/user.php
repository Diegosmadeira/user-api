<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
*
*/


Class User extends Model{

	protected $fillable = [
		'name', 'email' , 'updated_at', 'created_at'
];
}



?>