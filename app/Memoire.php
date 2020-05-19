<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memoire extends Model
{
  protected $table = 'memoire';
  public $timestamps = false;
  protected $fillable = ['id', 'titre', 'resumer', 'description', 'auteur', 'id_categorie', 'id_media', 'id_status'];

  //Relation  one to one -> media
  public function media()
  {
    return $this->belongsTo(Media::class, 'id_media');
  }
  //Relation one to many -> category

  public function categories()
  {
    return $this->belongsTo(Categories::class, 'id_categorie'); // TODO pour benji
  }

  //Relation one to many -> status
  public function status()
  {
    return $this->belongsTo(MemoireStatus::class, 'id_status');
  }

}
