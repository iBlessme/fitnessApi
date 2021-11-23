<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WorkerResourse extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'salary' => $this->salary,


            'position_works' => PositionWorkResourse::collection($this->position_work),
            'user_clubs' => UserClubResourse::collection($this->user_club),


            'created_at' => $this->created_at
        ];
    }
}
