<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = "messages_contact";
    protected $fillable = ["nom", "email", "objet", "message"];
}
