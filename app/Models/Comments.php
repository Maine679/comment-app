<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function commentsUserRate()
    {
        return $this->hasMany(CommentsUsersRate::class, 'comment_id');
    }

    public function files()
    {
        return $this->morphMany(Files::class, 'fileable');
    }
}
