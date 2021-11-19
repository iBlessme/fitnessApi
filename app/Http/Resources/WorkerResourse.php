<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WorkerResourse extends JsonResource
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
            'salary' => $this->salary,


            'position_works' => PositionWorkResourse::collection($this->position_work),
            'user_clubs' => UserClubResourse::collection($this->user_club),


            'created_at' => $this->created_at
        ];
    }
}
