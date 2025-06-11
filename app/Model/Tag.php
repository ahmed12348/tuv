<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable=['title_en','title_ar'];


    public function services(){
        return $this->belongsToMany('App\Model\Service' ,'service_tags');
    }
}
