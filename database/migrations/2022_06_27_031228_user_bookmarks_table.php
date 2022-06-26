<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_bookmarks', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('bookmark_id');
            $table->timestamps();

            // 外部キー制約
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->foreign('bookmark_id')
            ->references('id')
            ->on('bookmarks')
            ->onDelete('cascade');

            // 複合主キー
            $table->primary(['id', 'user_id', 'bookmark_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_bookmark');
    }
};
