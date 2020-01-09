<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    protected $table = 'mediatype';
  
    protected $fillable = ['id', 'type'];

    public $timestamps = false;

    public function types()
    {
      return $this->hasMany(Memoire::class, 'id_media');
    }
}
