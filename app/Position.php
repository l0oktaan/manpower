<?php

namespace App;

use App\Section;
use App\Division;
use App\LevelFrame;
use App\LevelHold;
use App\PositionName1;
use App\PositionName2;
use App\Change;
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
        return $this->belongsTo('App\PositionName1','name1_id');
    }
    public function position_name2(){
        return $this->belongsTo('App\PositionName2','name2_id');
    }
    public function section(){
        return $this->belongsTo('App\Section');
    }
    public function employee(){
        return $this->belongsTo('App\Employee');
    }
    public function changes(){
        // $change = Change::orderBy('id')
        //         ->where('position_id','=',$this->id)
        //         ->get();
        // return $change;
        return $this->hasMany('App\Change')->orderBy('id','desc');
    }

    public function division(){
        return $this->belongsTo('App\Division');
    }
}
