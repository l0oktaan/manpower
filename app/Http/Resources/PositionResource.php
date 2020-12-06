<?php

namespace App\Http\Resources;

use App\Http\Resources\ChangeResource;
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
        return [
            'id' => $this->id,
            'no' => $this->no,
            'name1' => $this->position_name1->name,
            'name2' => $this->position_name1->name,
            'level_frame' => $this->level_frame->name,
            'level_hold' => $this->level_hold->name,
            'section' => $this->section->name,
            'division' => $this->section->division->name,
            'status' => $this->status,
            'description' => $this->description,
            'changes' => ChangeResource::collection($this->changes),
        ];
    }
}
