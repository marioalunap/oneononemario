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

    protected $appends = [
    	'abstract',
    ];

    public function getCreatedAtAttribute($parametro1){
    	$parametro1 = new Carbon($parametro1);
    	return Carbon::now()->diffForHumans($parametro1);
    }

    public function getContentAttribute($parametro1){
    	return strtoupper($parametro1);
    }

    public function getAbstractAttribute(){
    	return substr($this->content, 0, 4);
    }


}
