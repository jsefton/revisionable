<?php

namespace Revisionable;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    protected $fillable = [
        'resource',
        'original',
        'current',
        'key',
        'user_id'
    ];

    protected $casts = [
      'original' => 'array',
      'current' => 'array'
    ];
}
