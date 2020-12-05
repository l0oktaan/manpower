<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = "divisions";
    protected $fillable = [
        'id',
        'name',
        'type',
        'under_id',
        'description'
    ];

    public function positions(){
        return $this->hasManyThrough('App\Position','App\Section');
    }
    public function sections(){
        return $this->hasMany('App\Section');
    }

}
