<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VideoUserLike extends Model
{
    use HasFactory;
    protected $table = 'video_user_likes';
    protected $guarded = false;
}
