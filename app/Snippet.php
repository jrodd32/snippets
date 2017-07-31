<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Snippet extends Model
{
    use SoftDeletes;

    protected $protected = ['id'];
    protected $fillable = ['title', 'body', 'forked_id', 'language_id', 'user_id'];
    protected $guarded = ['id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
    */
    protected $dates = ['deleted_at'];

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

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
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
