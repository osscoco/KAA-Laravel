<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Hebergement extends Model
{
	protected $table = 'hebergements';

	protected $fillable = [
		'label'
	];
}
