<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_Doctor extends Model
{
    protected $fillable=['room_id','doctor_id'];
    protected $table='room_doctors';

    public function room()
    {
        return $this->belongsTo('App\Consultation');
    }

    public function doctor()
    {
       return $this->belongsTo('App\Doctor','doctor_id');
    }

    public function schedule()
    {
        return $this->hasMany('App\Schedule');
    }
}
