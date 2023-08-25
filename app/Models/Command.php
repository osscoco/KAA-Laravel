<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
	protected $table = 'commands';

	protected $casts = [
        'user_id' => 'int',
		'parcours_id' => 'int'
	];

	protected $fillable = [
        'user_id',
		'parcours_id',
        'dateDeb',
        'dateFin'
	];

    public function user()
	{
		return $this->belongsTo(Step::class);
	}

	public function parcours()
	{
		return $this->belongsTo(Parcours::class);
	}
}
