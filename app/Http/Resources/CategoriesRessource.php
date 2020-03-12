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
        $memoires = MemoiresRessource::collection($this->whenLoaded('memoires'));
        return [
            'id' =>$this->id,
            'nom' => $this->nom,
            'couleur' => $this->couleur,
            'image' => $this->image,
            'memoires' => $memoires
        ];
    }
}
