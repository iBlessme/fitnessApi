<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReseptionResourse extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,



            'sport_inventories' => SportInventoryResourse::collection($this->sportInventorie),
            'workers' => WorkerResourse::collection($this->worker),
            'clients' => ClientResourse::collection($this->client),


            'created_at' => $this->created_at
        ];
    }
}
