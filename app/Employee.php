<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employees";
    protected $fillable = [
        'id',
        'citizen_id',
        'prefix_id',
        'name',
        'surname',
        'gender',
        'status',
        'description'
    ];



    public function changes(){
        return $this->hasMany('App\Change');
    }
    public function positions(){
        return $this->hasMany('App\Position');
    }
    public function prefix(){
        return $this->belongsTo('App\PrefixName','prefix_id','no');
    }

}
