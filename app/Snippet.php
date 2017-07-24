<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    protected $fillable = ['title', 'body', 'forked_id'];

    public function forks()
    {
        return $this->hasMany(Snippet::class, 'forked_id');
    }

    public function originalSnippet()
    {
        return $this->belongsTo(Snippet::class, 'forked_id');
    }

    public function isAFork()
    {
        // !! casts as a boolean
        return !! $this->originalSnippet;
    }
}
