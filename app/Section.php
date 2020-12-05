<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = "sections";
    protected $fillable = [
        'id',
        'name',
        'division_id',
        'description'
    ];

    public function positions(){
        return $this->hasMany('App\Position');
    }
    public function division(){
        return $this->belongsTo('App\Division');
    }
}
