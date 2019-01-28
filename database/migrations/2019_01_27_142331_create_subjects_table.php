<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tile',50);
            $table->string('description',313);
            $table->string('picture',313);
            $table->text('body');
            $table->integer('count_view');
            $table->integer('blog_id');
            $table->integer('user_id');
            $table->Integer('is_published');
            $table->date('published_date');
            $table->Integer('state');
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
        Schema::dropIfExists('subjects');
    }
}
