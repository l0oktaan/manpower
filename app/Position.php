<?php

namespace App;

use App\Section;
use App\Division;
use App\LevelFrame;
use App\LevelHold;
use App\PositionName1;
use App\PositionName2;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = "positions";
    protected $fillable = [
        'id',
        'no',
        'name1_id',
        'name2_id',
        'level_frame_id',
        'level_hold_id',
        'section_id',
        'division_id',
        'status',
        'description'
    ];

    public function level_frame(){
        return $this->belongsTo('App\LevelFrame');
    }
    public function level_hold(){
        return $this->belongsTo('App\LevelHold');
    }
    public function position_name1(){
        return $this->belongsTo('App\PositionName1');
    }
    public function position_name2(){
        return $this->belongsTo('App\PositionName2');
    }
    public function section(){
        return $this->belongsTo('App\Section');
    }

}
