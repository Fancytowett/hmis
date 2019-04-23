<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable=['f_name','l_name','email','id_no','phone_no','user_id'];
    protected $table='doctors';
    public function room_doctor()
    {
        return $this->hasMany('App\Room_Doctor');
    }

    public function user()
    {
       return $this->belongsTo('App\User');
    }
}
