<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemoireStatus extends Model
{
    protected $table = 'memoire_status';

    protected $fillable = ['id', 'status'];

    public $timestamps = false;
    
}
