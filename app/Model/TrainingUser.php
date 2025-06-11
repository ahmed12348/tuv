<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TrainingUser extends Model
{
    protected $fillable=['user_id','training_id'];


    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function training(){
        return $this->belongsTo('App\Model\Trainning','training_id');
    }

}
