<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AbonementResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name_abonement' => $this->name_abonement,
            'cost_abonement' => $this->cost_abonement,
            'date_start' => $this->date_start,
            'date_finish' => $this->date_finish,
            'bonus' => AbonementBonusProgrammList::collection($this -> bonus),

            'created_at' => $this->created_at,
        ];
    }
}
