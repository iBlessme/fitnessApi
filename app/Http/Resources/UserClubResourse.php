<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserClubResourse extends JsonResource
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
            'name_user' => $this->name_user,
            'surname' => $this->surname,
            'thirdname' => $this->thirdname,
            'passport_number' => $this->passport_number,
            'passport_serial' => $this->passport_serial,
            'snils' => $this->snils,
            'phone_number' => $this->phone_number,
            'login' => $this->login,
            'password' => $this->password,
            'birth_day' => $this->birth_day,
            'created_at' => $this->created_at,
        ];
    }
}
