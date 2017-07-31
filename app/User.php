<?php

namespace App;

use App\Favorite;
use App\Snippet;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function snippets()
    {
        return $this->hasMany(Snippet::class);
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
