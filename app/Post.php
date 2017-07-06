<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	public function comments()
	{
    //protected $fillable = ['title', 'body'];

	    return $this->hasMany(Comment::class);
	}
}
