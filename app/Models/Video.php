<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'videos';
    protected $guarded = false;

    protected $fillable = [
        'title',
        'path',
        'category_id',
        'views',
    ];


    protected $withCount= ['likedUsers'];
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function LikedUsers(){
        return $this->belongsToMany(User::class, 'video_user_likes', 'video_id', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'video_id', 'id');
    }

}
