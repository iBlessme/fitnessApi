<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResourse extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,

            'abonements' => AbonementResourse::collection($this->abonement),

            'user_clubs' => UserClubResourse::collection($this->user_club),


            'created_at' => $this->created_at
        ];
    }
}
