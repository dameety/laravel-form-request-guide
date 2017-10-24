<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $hidden = [
        'id'
    ];

    public $fillable = [
        'email',
        'subject',
        'message',
        'category'
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d M Y');
    }
}
