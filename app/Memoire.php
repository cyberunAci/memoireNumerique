<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memoire extends Model
{
    protected $table = 'memoire';
    public $timestamps = false;
    protected $fillable = ['id', 'titre', 'resumer', 'description', 'auteur', 'id_categorie', 'id_mediatype', 'image', 'video', 'status'];

      //Relation  one to one -> media
    public function media(){
        $this->hasOne('App\Media');
    }
      //Relation one to many -> category

    public function category(){
        $this->belongsTo('App\Category');
    }
   
}
