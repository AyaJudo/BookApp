<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
 	   //
	//protected $table = 'books';
    public function review_books()
    {
        return $this->belongsToMany('App\User','reviews');
    }
}
