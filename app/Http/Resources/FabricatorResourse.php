<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FabricatorResourse extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name_fabricator' => $this->name_fabricator,
            'country' => $this->country,
            'created_at' => $this->created_at
        ];
    }
}
