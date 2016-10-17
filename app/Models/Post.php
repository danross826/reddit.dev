<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends BaseModel
{
    
	public function user()
	{
		return $this->belongsTo('App\User', 'user_id', 'id');
	}

}
