<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $fillable = [
        'email', //get from profile
        'subject',
        'message', //body
        'category' // select with options
    ];
}
