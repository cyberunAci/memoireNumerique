<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mediatype extends Model
{
    protected $table = 'mediatype';
  
    protected $fillable = ['id', 'type'];

    public $timestamps = false;

}
