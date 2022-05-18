<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author_name', 50);
            $table->string('author_phone', 15)->nullable();
            $table->string('author_email', 30)->nullable();
            $table->string('author_address')->nullable();
            $table->string('author_avatar', 255)->nullable();
            $table->string('author_url')->nullable();
            $table->string('author_ip', 100)->nullable();
            $table->string('author_agent')->nullable();
            $table->text('content');
            $table->string('status', 15);
            $table->string('published_at', 15)->nullable();
            $table->unsignedTinyInteger('is_deleted')->nullable()->default(0);
            $table->string('deleted_at', 15)->nullable();
            $table->string('user_id', 50);
            $table->unsignedTinyInteger('is_closed')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
