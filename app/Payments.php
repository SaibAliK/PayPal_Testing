<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    //
    Protected $fillable =[
        'user_id','payment_id','method','name','price','quantity'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
