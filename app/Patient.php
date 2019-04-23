<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable=['f_name','m_name','l_name','p_phone','k_phone','estate','id_no','county_id'];

    public function schedules()
    {
     return $this->hasMany('App\Schedule');
    }

    public function diagnosis()
    {
        return $this->hasManyThrough('App\Diagnosis','App\Schedule');
    }

    public function county()
    {
        return $this->belongsTo('App\County');

    }
}
