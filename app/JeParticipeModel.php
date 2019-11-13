<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JeParticipeModel extends Model
{
    protected $table = "messagesJeParticipe";

    protected $fillable = ["nom", "email", "titreVideo", "descriptionVideo", "lienVideo"];
}
