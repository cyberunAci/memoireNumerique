<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorie';
  
    protected $fillable = ['id', 'nom'];

    public $timestamps = false;

    public function memoire()
    {
        return $this->hasMany('App\Memoire');
    }

}
