<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Language extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['name'];
    protected $guarded = ['id'];

    const HTML = 1;
    const CSS = 2;
    const PHP = 3;
    const JAVASCRIPT = 4;
    const RUBY = 5;
    const BASH = 6;

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
