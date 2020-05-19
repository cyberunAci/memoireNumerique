<?php

namespace App;
use App\Memoire;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categorie';

    protected $fillable = ['id', 'nom', 'couleur', 'image'];

    public $timestamps = false;

    public function categories()
    {
      return  $this->hasMany(Memoire::class, 'id_categorie');
    }
}
