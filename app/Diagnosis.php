<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    protected $fillable=['schedule_id','diagnosis','prescription'];
    protected $table='diagnosis';

    public function schedule()
    {
        return $this->belongsTo('App\Schedule');
    }



}
