<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChangeResource extends JsonResource
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
            'employee_id' => $this->employee_id,
            'employee_name' => $this->employee->prefix->prefix
                . '' . $this->employee->name . ' ' . $this->employee->surname,
            // 'employee_name' => $this->employee->name . ' ' . $this->employee->surname,
            'type' => $this->type,
            'command_no' => $this->command_no,
            'command_date' => $this->command_date,
            'position' => $this->position->position_name1->name,
            'level' => $this->level_hold->name,
            'position_no' => $this->position->no,
            'section' => $this->position->section->name,
            'division' => $this->position->section->division->name
        ];
    }
}
