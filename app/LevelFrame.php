<?php

namespace App;
use App\Position;
use Illuminate\Database\Eloquent\Model;

class LevelFrame extends Model
{
    protected $table = "level_frames";
    protected $fillable = [
        'id',
        'name',
        'description'
    ];

    public function positions(){
        return $this->hasMany('App\Position');
    }
}
