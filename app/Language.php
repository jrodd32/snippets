<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['name'];

    const HTML = 1;
    const CSS = 2;
    const PHP = 3;
    const JAVASCRIPT = 4;
    const RUBY = 5;
    const BASH = 6;
}
