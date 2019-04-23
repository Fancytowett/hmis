<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $fillable=['name','number'];

    public function patients()
    {
        $this->hasMany('App\Patient');
    }
}
