<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            'prefix_id' => $this->prefix_id,
            'fullname' => $this->prefix->prefix . $this->name . ' ' . $this->surname,
            'citizen_id' => $this->citizen_id,
            'gender' => $this->gender,
            'status' => $this->status,
            'description' => $this->description



            // 'section' => $this->position->section->name,
            // 'division' => $this->position->section->division->name
        ];
    }
}
