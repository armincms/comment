<?php

namespace Armincms\Comment;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    protected $guarded = [];

    public function replies()
    {
        return $this->hasMany(static::class);
    }
}
