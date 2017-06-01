<?php
/* Arquivo Model do projeto */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
	protected $fillable = [
	'id_usuario',
	'materia',
	'd1_p1',
	'd1_p2',
	'atv_d1',
	'd1_p3',

	];
}
