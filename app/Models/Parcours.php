<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Parcours extends Model
{
	protected $table = 'parcours';

	protected $fillable = [
		'label'
	];
}
