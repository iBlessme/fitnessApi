<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EducationResourse extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'quailifaction' => $this->quailifaction,
            'stage' => $this->stage,
            'registration_number' => $this->registration_number,
            'serial_number' => $this->serial_number,
            'institution' => $this->institution,
            'date_ofissue' => $this->date_ofissue,


            'workers' => WorkerResourse::collection($this->worker),



            'created_at' => $this->created_at
        ];
    }
}
