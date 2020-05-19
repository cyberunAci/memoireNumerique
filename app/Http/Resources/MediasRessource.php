<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MediasRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $type = new MediaTypesRessource($this->whenLoaded('type'));
        return [
            'id' => $this->id,
            'video' => $this->video,
            'image' => $this->image,
            'id_type' => $type
        ];
    }
}
