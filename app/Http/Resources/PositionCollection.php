<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PositionCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'no' => $this->no,
            'name1' => $this->position_name1->name,
            'name2' => $this->position_name2->name,
            'level_frame' => $this->level_frame->name,
            'level_hold' => $this->level_hold->name,
            'section' => $this->section->name,
            'division' => $this->division->name,
            'division_type' => $this->division->type,
            'status' => $this->status,
            // 'employee' => $this->employee,
            'description' => $this->description,
            'changes' => ChangeResource::collection($this->changes),
        ];
    }
}
