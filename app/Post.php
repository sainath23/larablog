<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // One to One Relationship. A post belongsTo current user.
    public function user() {
        return $this->belongsTo('App\User');
    }
}
