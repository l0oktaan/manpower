<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PositionName2 extends Model
{
    protected $table = "position_name2";
    protected $fillable = [
        'id',
        'name',
        'description'
    ];

    public function positions(){
        return $this->hasMany('App\Position');
    }
}
