<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaModel extends Model
{
    protected $table = 'video_migrate';
  
    protected $fillable = ['id', 'titre', 'resumer', 'description', 'image', 'video'];
}
