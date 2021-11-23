<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BonusProgramResourse extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name_programm' => $this->name_programm,
            'cost' => $this->cost,
            'created_at' => $this->created_at
        ];
    }
}
