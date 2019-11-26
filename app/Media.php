<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';

    protected $fillable = ['id', 'video', 'image', 'id_type'];

    public $timestamps = false;

    //Relation one to many -> mediaType
    public function type()
    {
      return  $this->belongsTo(Mediatype::class, 'id_type');
    }
}
