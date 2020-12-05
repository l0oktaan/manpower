<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PositionName1 extends Model
{
    protected $table = "position_name1";
    protected $fillable = [
        'id',
        'name',
        'description'
    ];

    public function positions(){
        return $this->hasMany('App\Position');
    }
}
