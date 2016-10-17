<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class BaseModel extends Model
{
    public function getCreatedAtAttribute($value)
	    {
	        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	        return $utc->format('l, jS \\of F Y h:i:s A');

	    }

    public function getUpdatedAtAttribute($value)
	    {
	        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	        return $utc->format('l, jS \\of F Y h:i:s A');
	    }

}
