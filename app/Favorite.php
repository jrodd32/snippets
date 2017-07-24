<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    /**
        Associates a Favorite to a User.
        As of July 24th, 2017 you can only favorite Snippets as that is all that the system contains. This will change as the system grows.

        user_id -- user id of the User who Favorited the object
        object_id -- the id of the object saved. Ex.) Snippet, Document?, etc
        type -- Class constant representing the obejct saved
    **/
    const SNIPPET = 1;

    protected $protected = ['id'];
    protected $fillable = ['user_id', 'object_id', 'type'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function snippets()
    {
        return $this->belongsTo(Snippet::class, 'object_id');
    }
}
