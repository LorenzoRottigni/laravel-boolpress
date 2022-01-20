<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
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

            $table->string('title');
            $table->longText('content');
            //$table->smallInteger('creator_id');
            //$table->string('topics', 10);
            //$table->unsignedBigInteger('user_id');
            $table->timestamps();

            /*$table->foreign('user_id')
                  ->references('id')
                  ->on('users');*/
            //$table->primary('id');
            $table->foreignId('user_id')
                  ->constrained();
            $table->foreignId('topic_id')
                  ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Schema::dropIfExists('posts');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
