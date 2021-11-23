<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TypesOfTraningResourse extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name_traning' => $this->name_traning,
            'created_at' => $this->created_at
        ];
    }
}
