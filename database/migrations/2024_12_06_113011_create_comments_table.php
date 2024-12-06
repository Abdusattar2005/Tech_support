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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('video_id');
            $table->text('message');
            $table->timestamps();

            $table->index('video_id', 'video_user_comments_video_idx');
            $table->index('video_id', 'video_user_comments_user_idx');

            $table->foreign('video_id', 'video_user_comments_video_id_fk')->on('videos')->references('id');
            $table->foreign('user_id', 'video_user_comments_user_id_fk')->on('users')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
