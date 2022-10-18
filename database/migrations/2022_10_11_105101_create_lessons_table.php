<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            // $table->id();
            // $table->bigInteger('subject_id')->unsigned();
            // $table->bigInteger('user_id')->unsigned();
            
            $table->primary(['user_id', 'subject_id']);
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('subject_id')->references('id')->on('subjects');
            $table->date('achive');
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
        Schema::dropIfExists('lessons');
    }
}
