<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $guarded = ['id'];
    protected $fillable = ['name', 'description', 'parent_id'];

    public function users()
    {
        return $this->morphedByMany('App\User', 'taggable');
    }

    public function snippets()
    {
        return $this->morphedByMany('App\Snippet', 'taggable');
    }

    public function languages()
    {
        return $this->morphedByMany('App\Language', 'taggable');
    }
}
