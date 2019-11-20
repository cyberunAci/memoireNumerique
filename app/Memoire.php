<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memoire extends Model
{
    protected $table = 'memoire';
    public $timestamps = false;
    protected $fillable = ['id', 'titre', 'resumer', 'description', 'auteur', 'id_categorie', 'id_mediatype', 'image', 'video', 'status'];


   
}
