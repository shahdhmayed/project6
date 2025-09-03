<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $primarykey = 'tagid';
    public $incrementing =true;
    protected $keyType='int';
     protected $fillable =['name' ];

    public function posts()
    {
        return $this->belongsToMany(Post::class , 'tag_post');
    }

}





