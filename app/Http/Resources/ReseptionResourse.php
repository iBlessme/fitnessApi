<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReseptionResourse extends JsonResource
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



            'sport_inventories' => SportInventoryResourse::collection($this->sport_inventorie),
            'workers' => WorkerResourse::collection($this->worker),
            'clients' => ClientResourse::collection($this->client),


            'created_at' => $this->created_at
        ];
    }
}
