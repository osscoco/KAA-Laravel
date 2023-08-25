<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
	protected $table = 'steps';

	protected $fillable = [
		'label'
	];
}
