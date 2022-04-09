<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AbsenResource extends JsonResource
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
            "nama" => $this->nama,
            "deskripsi" => $this->deskripsi,
            "kelas" => new KelasResource($this->kelas),
            "guru" => new GuruResource($this->guru),
            "published" => $this->published,
            "date_start" => $this->date_start,
            "date_end" => $this->date_end,
            "time_start" => $this->time_start,
            "time_end" => $this->time_end,
        ];
    }
}
