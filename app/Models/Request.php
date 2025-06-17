<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'subject',
        'message',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
