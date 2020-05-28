<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MemoiresRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //TODO voir Status
        $status = new MemoireStatusRessource($this->whenLoaded('status'));
        $category = new CategoriesRessource($this->categories);
        $media = new MediasRessource($this->whenLoaded('media'));

        return [
            'id' => $this->id,
            'titre' => $this->titre,
            'resumer' => $this->resumer,
            'description' => $this->description,
            'auteur' => $this->auteur,
            'id_categorie' => $category,
            'status' => $status,
            'media' => $media,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];
    }
}
