<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->text('comment');
            $table->morphs('commentable');
            $table->nullableMorphs('commenter');
            $table->unsignedBigInteger('comment_id')->nullable();  
            $table->unsignedBigInteger('depth')->default(0);  
            $table->boolean('approved')->default(false);
            $table->ipAddress('ip')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('comment_id')->references('id')->on('comments')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
