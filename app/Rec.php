<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rec extends Model
{
    protected $fillable=['phone_no','id_no','user_id'];

    public function user()
    {
      return $this->belongsTo('App\User');
    }


}
