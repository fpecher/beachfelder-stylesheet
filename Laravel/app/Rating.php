<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
		public function beachcourts()
    {
        return $this->belongsTo('App\Beachcourt');
    }
    protected $fillable = ['beachcourt_id', 'k1_sandqualitaet', 'k2_sicherheit', 'k3_netzqualitaet', 'k4_sonnenqualitaet', 'k5_luftqualitaet' ];
}