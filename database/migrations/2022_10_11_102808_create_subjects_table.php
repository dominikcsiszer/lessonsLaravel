<?php

use Illuminate\Database\Migrations\Migration;
use App\Subject;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('limit');
            $table->timestamps();
        });

        Subject::create(['name'=>"Történelem 11", 'description'=>"Történelem óra a 11.A osztályosoknak",'limit'=>2]);
        Subject::create(['name'=>"Testnevelés 10", 'description'=>"Testnevelés óra a 10.A osztályosoknak",'limit'=>5]);
        Subject::create(['name'=>"Matematika 11", 'description'=>"Matematika óra a 11.C osztályosoknak",'limit'=>1]);
        Subject::create(['name'=>"Irodalom 9", 'description'=>"Irodalom óra a 9.A osztályosoknak",'limit'=>3]);
        Subject::create(['name'=>"Angol 12", 'description'=>"Angol óra a 12.B osztályosoknak",'limit'=>4]);
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
