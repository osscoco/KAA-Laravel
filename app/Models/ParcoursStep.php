<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ParcoursStep extends Model
{
	protected $table = 'parcours_step';

	protected $casts = [
		'parcours_id' => 'int',
		'step_id' => 'int'
	];

	protected $fillable = [
		'parcours_id',
		'step_id'
	];

	public function parcours()
	{
		return $this->belongsTo(Parcours::class);
	}

	public function step()
	{
		return $this->belongsTo(Step::class);
	}
}
