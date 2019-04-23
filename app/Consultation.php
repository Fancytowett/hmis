<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable= ['name','number'];

    public function room_doctor()
    {
     return $this->hasMany('App\Room_Doctor');
    }
}
