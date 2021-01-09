<?php

namespace Crud;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
      public function users(){
    	return $this->belongsTo(User::class);
    }
}
