<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'postid';
    public $incrementing =true;
    protected $keyType='int';
    protected $fillable =['title' , 'content' ,'userid' ];

    public function user()
    {
        return $this->belongsTo(User::class , 'userid' , 'id');
    }

   
    public function comments()
    {
        return $this->hasMany(Comment::class , 'postid' , 'postid');
    }


    public function categories()
    {
        return $this->belongsToMany(Category::class  , 'post_categories','postid' , 'categoryid');}

    public function tags()
    {
        return $this->belongsToMany(Tag::class , 'tag_post');}


}



