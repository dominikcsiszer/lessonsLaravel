<?php

use App\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamps();
        });
        User::create(["name"=>"Kovács János", "email"=>"kovacs.janos@gmail.com"]);
        User::create(["name"=>"Kiss Enikő", "email"=>"kiss.eniko@gmail.com"]);
        User::create(["name"=>"Jakab Péter", "email"=>"jakab.peter@gmail.com"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
