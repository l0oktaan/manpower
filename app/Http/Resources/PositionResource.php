<?php

namespace App\Http\Resources;

use App\Http\Resources\ChangeResource;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Http\Resources\Json\JsonResource;

class PositionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $position_name1 = $this->whenLoaded('position_name1');
        $position_name2 = $this->whenLoaded('position_name2');
        $level_frame = $this->whenLoaded('level_frame');
        $level_hold = $this->whenLoaded('level_hold');
        $section = $this->whenLoaded('section');
        $division = $this->whenLoaded('division');
        $employee = $this->whenLoaded('employee');

        return [
            'id' => $this->id,
            'no' => $this->no,
            'name1' => $position_name1->name,
            'name2' => $position_name2->name,
            'level_frame' => $level_frame->name,
            'level_hold' => $level_hold->name,
            'section' => $section->name,
            'division' => $division->name,
            'division_type' => $division->type,
            'employee' => $employee,



            // 'level_frame' => $this->level_frame->name,
            // 'level_hold' => $this->level_hold->name,
            // 'section' => $this->section->name,
            // 'division' => $this->section->division->name,
            // 'division' => $this->division->name,
            // 'division_type' => $this->division->type,

            // 'employee' => $this->employee,
            'status' => $this->status,
            'description' => $this->description,

            // 'changes' => ChangeResource::collection($this->changes),
        ];
    }
}
