<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subadmin extends Model
{
    //

    protected $fillable = [
        'user_id',
    ];

    public function User()
    {
        return $this->belongsTo('App\Users');
    }


    
}
