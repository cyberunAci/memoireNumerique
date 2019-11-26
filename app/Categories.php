<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categorie';
  
    protected $fillable = ['id', 'nom', 'couleur', 'image'];

    public $timestamps = false;

}
