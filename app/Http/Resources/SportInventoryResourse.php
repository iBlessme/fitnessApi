<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SportInventoryResourse extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,

            'types_of_inventories' => TypesOfInventoryResourse::collection($this->types_of_inventorie),
            'halls' => HallResourse::collection($this->hall),
            'fabricators' => FabricatorResourse::collection($this->fabricator),

            'created_at' => $this->created_at
        ];
    }
}
