<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TypesOfInventoryResourse extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name_inventory' => $this->name_inventory,
            'created_at' => $this->created_at
        ];
    }
}
