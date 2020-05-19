<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';

    protected $fillable = ['id', 'video', 'image', 'id_type'];

    public $timestamps = false;

    //Relation one to many -> media
    public function media()
    {
      return  $this->hasMany(Memoire::class, 'id_media');
    }
    
    //Relation one to many -> mediaType
    public function mediatype()
    {
      return $this->belongsTo(Mediatype::class, 'id_type');
    }
}
