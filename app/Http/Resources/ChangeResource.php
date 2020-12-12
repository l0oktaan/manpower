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
        $employee = $this->whenLoaded('employee');
        $position = $this->whenLoaded('position');
        $level_hold = $this->whenLoaded('level_hold');
        // $prefix = $this->whenLoaded('prefix');
        return [
            'id' => $this->id,
            'employee_id' => $employee->id,
            'employee_name' => $employee->prefix->prefix
                . '' . $employee->name . ' ' . $employee->surname,
            // 'employee_name' => $this->employee->name . ' ' . $this->employee->surname,
            'type' => $this->type,
            'command_no' => $this->command_no,
            'command_date' => $this->command_date,
            'position' => $position->position_name1->name,
            'level' => $level_hold->name,
            'position_no' => $position->no,
            'updated_date' => $this->updated_date,
            'updated_by' => $this->updated_by,

            // 'section' => $this->position->section->name,
            // 'division' => $this->position->section->division->name
        ];
    }
}
