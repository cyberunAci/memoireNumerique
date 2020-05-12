<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemoireStatus extends Model
{
    protected $table = 'memoire_status';

    protected $fillable = ['id', 'status'];

    public $timestamps = false;

    public function status()
    {
      return  $this->hasMany(Memoire::class, 'id_status');
    }
    
}
