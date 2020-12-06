<?php

namespace Revisionable;

use Illuminate\Database\Eloquent\Model;

trait Revisionable
{
    public static function bootRevisionable()
    {
        static::saved(function ($item) {
            if ($item->original !== $item->attributes) {
                $revision = [
                    'original' => $item->getOriginal(),
                    'current' => $item->attributes,
                    'resource' => $item->resourceReference()
                ];
                if (auth()->check()) {
                    $revision['user_id'] = auth()->user()->id;
                }
                Revision::create($revision);
            }
        });
    }
}
