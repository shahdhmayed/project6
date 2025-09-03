<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable =['name' , 'email' ,'phone' , 'password' ];

    public function profile()
    {
        return $this->hasOne(Profile::class , 'userid' , 'id');
    }

   
    public function posts()
    {
        return $this->hasMany(Post::class , 'userid' , 'id');
    }


    public function comments()
    {
        return $this->hasMany(Comment::class , 'userid' , 'id');}

}


