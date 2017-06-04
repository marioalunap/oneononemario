<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [
    	'content',
    ];

    public function getCreatedAtAttribute($parametro1){
    	return $parametro1;
    	return Carbon::now()->diffForHumans($parametro1);
    }

    public function getContentAttribute($parametro1){
    	return strtoupper($parametro1);
    }


}
