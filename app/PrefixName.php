<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrefixName extends Model
{
    protected $table = "prefix_names";
    protected $fillable = [
        'id',
        'prefix',
        'status'
    ];

    public function employees(){
        return $this->hasMany('App\Employee');
    }
}
