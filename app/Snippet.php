<?php

namespace App;

use App\Language;
use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    protected $fillable = ['title', 'body', 'forked_id', 'language_id'];

    public function forks()
    {
        return $this->hasMany(Snippet::class, 'forked_id');
    }

    public function originalSnippet()
    {
        return $this->belongsTo(Snippet::class, 'forked_id');
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function isAFork()
    {
        // !! casts as a boolean
        return !! $this->originalSnippet;
    }
}
