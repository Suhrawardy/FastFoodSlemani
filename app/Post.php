<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
     protected $fillable = [
'post_name', 'email', 'post_desc', 'longitude','latitude','address','photo','category','delivery_status','phone',''
];



    public  function  user(){
        return $this->belongsTo('app\User');
    }
}
