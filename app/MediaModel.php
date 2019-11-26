<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaModel extends Model
{
    protected $table = 'mediatype';
  
    protected $fillable = ['id', 'video','image','id_type'];
    public $timestamps = false;
   
    //Relation one to many -> mediaType
    public function mediaType(){
        $this->belongsTo('Mediatype');
    }
}
