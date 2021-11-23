<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PositionWorkResourse extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name_position' => $this->name_position,
            'created_at' => $this->created_at
        ];
    }
}
