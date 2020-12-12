<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrefixName extends Model
{
    protected $table = "prefix_names";
    protected $fillable = [
        'id',
        'no',
        'prefix',
        'status'
    ];

    public function employees(){
        return $this->hasMany('App\Employee');
    }
    public function changes(){
        return $this->hasManyThrough(
            'App\Change',
            'App\Employee',
            'prefix_id',
            'employee_id'
        );
    }
}
