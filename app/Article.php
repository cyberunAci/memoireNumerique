<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles_migrate';

    protected $fillable= ['id', 'titre', 'resumer', 'contenu', 'auteur'];
}
