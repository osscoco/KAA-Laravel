<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class StepHebergement extends Model
{
	protected $table = 'steps_hebergements';

	protected $casts = [
		'step_id' => 'int',
        'hebergement_id' => 'int'
	];

	protected $fillable = [
        'step_id',
		'hebergement_id'
	];

	public function step()
	{
		return $this->belongsTo(Step::class);
	}

    public function hebergement()
	{
		return $this->belongsTo(Hebergement::class);
	}
}
