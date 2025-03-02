<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $table = 'users';
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    const ROLE_ADMIN = 0;
    const ROLE_READER = 1;

    public static function getRoles()
    {
        return [
            0 => 'Admin',
            1 => 'Reader',
        ];
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $guarded = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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
    public function LikedVideos()
    {
        return $this->belongsToMany(Video::class, 'video_user_likes', 'user_id', 'video_id');
    }
    public function DisLikedVideos()
    {
        return $this->belongsToMany(Video::class, 'dislikes', 'user_id', 'video_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class , 'user_id', 'id');
    }

}
