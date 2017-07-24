<?php

namespace App;

use App\Language;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    protected $protected = ['id'];
    protected $fillable = ['title', 'body', 'forked_id', 'language_id', 'user_id'];

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function byAuthor($author_id)
    {
        return Snippet::where(['user_id' => $author_id])->get();
    }

    public function byLanguage($language_id)
    {
        return Snippet::where(['language_id' => $language_id])->get();
    }
}
