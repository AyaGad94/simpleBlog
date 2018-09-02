<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'created_at'
        ];
        
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


}
