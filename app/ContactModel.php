<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = "messages";

    protected $fillable = ["nom", "email", "objet", "message"];
}
