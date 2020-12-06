<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Position;
class LevelHold extends Model
{
    protected $table = "level_holds";
    protected $fillable = [
        'id',
        'name',
        'description'
    ];

    public function positions(){
        return $this->hasMany('App\Position');
    }
    public function changes(){
        return $this->hasMany('App\Change');
    }

}
