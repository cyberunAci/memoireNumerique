<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JeParticipeModel extends Model
{
    protected $table = "messages_jeparticipe";

    protected $fillable = ["nom", "email", "titreVideo", "descriptionVideo", "lienVideo"];
}
