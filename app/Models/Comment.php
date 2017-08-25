<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['description'];


    public function commentable()
    {
        return $this->morphTo();
    }
}