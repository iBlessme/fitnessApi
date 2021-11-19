<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HallResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name_hall' => $this->name_hall,
            'capacity' => $this->capacity,

            'types_of_tranings' => TypesOfTraningResourse::collection($this->types_of_traning),

            'created_at' => $this->created_at
        ];
    }
}
