<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forminsert extends Model
{
    protected $table = 'video_migrate';

    protected $fillable= ['titre', 'resumer', 'description', 'image', 'video'];
}
