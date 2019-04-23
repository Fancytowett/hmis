<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable=['patient_id','room_doc','status'];
    protected $table= 'schedules';
//    protected $primaryKey = 'room_doc';

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function room_doctor()
    {

        return $this->belongsTo('App\Room_Doctor','room_doc');
    }

    public function diagnosis()
    {
       return $this->hasOne('App\Diagnosis');
    }
}
