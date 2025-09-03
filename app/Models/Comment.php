<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primarykey = 'commentid';
    public $incrementing =true;
    protected $keyType='int';
    protected $fillable =['content' ,'userid' , 'postid'];

    public function user()
    {
        return $this->belongsTo(User::class ,'userid' , 'id');
    }

   
    public function post()
    {
        return $this->belongsTo(Post::class , 'postid', 'postid');
    }
}
