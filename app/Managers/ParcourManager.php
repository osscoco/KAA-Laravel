<?php

namespace App\Managers;

use App\Models\Parcours;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ParcourManager
{
    public function getAllParcours()
    {
        return Parcours::all();
    }
}
