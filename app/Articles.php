<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Articles extends Model
{
    protected $fillable=[
        'author',
        'name',
        'created_at'
    ];
    public function setCreatedAtAttribute($date){
       $this->attributes['created_at']=Carbon::createFromFormat('Y-m-d',$date);
    }
}

