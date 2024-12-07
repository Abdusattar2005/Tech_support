<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('video_user_likes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('video_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();

            $table->index('video_id', 'video_user_likes_video_idx');
            $table->index('video_id', 'video_user_likes_user_idx');

            $table->foreign('video_id', 'video_user_likes_video_id_fk')->on('videos')->references('id');
            $table->foreign('user_id', 'video_user_likes_user_id_fk')->on('users')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_user_likes');
    }
};
