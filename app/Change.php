<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Change extends Model
{
    protected $table = "changes";
    protected $fillable = [
        'id',
        'employee_id',
        'type',
        'position_id',
        'level_hold_id',
        'command_no',
        'command_date',
        'status',
        'description',
        'updated_date',
        'updated_by'
    ];


    public function employee(){
        return $this->belongsTo('App\Employee');
    }

    public function level_hold(){
        return $this->belongsTo('App\LevelHold');
    }

    public function position(){
        return $this->belongsTo('App\Position');
    }

    public function prefix(){
        return $this->belongsTo('App\PrefixName');
    }
}
