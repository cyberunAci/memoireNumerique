<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image_migrate';

    protected $fillable= ['titre', 'resumer', 'description', 'image'];
}
