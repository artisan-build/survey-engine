<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'responses' => '[]',
    ];

    protected $casts = [
        'responses' => 'array',
    ];
}
