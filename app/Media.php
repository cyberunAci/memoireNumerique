<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'mediatype';
  
    protected $fillable = ['id', 'type'];

    public $timestamps = false;
}
