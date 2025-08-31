<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
// class users extends Model
// {
//     protected $primaryKey = 'userid';

//     public function posts()
//     {
//         return $this->hasMany(Post::class, 'userid', 'userid');
//     }
// }
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'userid';
}


class category extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'categoryid';
}


class tag extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'tagid';
}

class profile extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'profileid';
}

class post extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'postid';
}

class comment extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'commentid';
}


    


// class Profile extends Authenticatable
// {
//     use HasFactory, Notifiable;

//     protected $primaryKey = 'ProfileID';
// }


// class User extends Authenticatable
// {
//     protected $primaryKey = 'UserID';

//     public function profile()
//     {
//         return $this->hasOne(Profile::class, 'UserID', 'id');
//     }
// }

// class Profile extends Model
// {
//     protected $primaryKey = 'ProfileID';

//     public function user()
//     {
//         return $this->belongsTo(User::class, 'UserID', 'id');
//     }
// }

// class Category extends Authenticatable
// {
//     use HasFactory, Notifiable;

//     protected $primaryKey = 'CategoryID';
// }