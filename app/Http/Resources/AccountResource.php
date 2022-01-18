<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AccountResource extends JsonResource
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
            "uuid" => $this->uuid,
            "username" => $this->username,
            "siswa" => $this->siswa,
            "guru" => new GuruResource($this->guru),
            "siswa" => new SiswaResource($this->siswa),
            "admin" => new AdminResource($this->admin),
        ];
    }
}
