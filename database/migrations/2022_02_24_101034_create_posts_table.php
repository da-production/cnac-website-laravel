<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('categorie_id')->constrained();
            $table->string('title');
            $table->string('title_Ar');
            $table->string('slug')->unique();
            $table->text('content');
            $table->text('content_Ar');
            $table->string('excerpt')->nullable();
            $table->string('excerpt_Ar')->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('key_words')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('post_type');
            $table->string('publiched_at');
            $table->boolean('autoload')->default(true);
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
        Schema::dropIfExists('posts');
    }
}
