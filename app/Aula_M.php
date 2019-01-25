<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria

class Aula_M extends Model
{
	use SoftDeletes; //Implementamos 

	protected $table = 'aulas';
	protected $dates = ['deleted_at']; //Registramos la nueva columna
    protected $fillable = ['name','lastname','age'];

}
