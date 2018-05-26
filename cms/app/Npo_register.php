<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Npo_register extends Model
{
    protected $fillable = [
        'npo_name', 'title', 'subtitle', 'facebook', 'twitter', 'instagram', 'youtube', 'url', 'code1', 'password',
        'code1', 'code2', 'cord3', 'manager', 'member1', 'member2', 'membe3', 'member4', 'body', 'published',
    ];
}
