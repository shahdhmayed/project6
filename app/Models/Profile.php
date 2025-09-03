<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $primarykey = 'profileid';
    public $incrementing =true;
    protected $keyType='int';
    protected $fillable =['bio' , 'userid' ];

    public function user()
    {
        return $this->belongsTo(User::class , 'userid' , 'id');
    }

}


