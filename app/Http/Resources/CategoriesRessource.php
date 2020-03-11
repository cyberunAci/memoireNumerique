<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoriesRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' =>$this->id,
            'nom' => $this->nom,
            'couleur' => $this->couleur,
            'image' => $this->image,
            'memoire' => MemoiresRessource::collection($this->whenLoaded($this->memoires))
        ];
    }
}
