<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contestant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('matric_number');
            $table->string('alias');
            $table->string('email');
            $table->string('phone');
            $table->integer('department_id');
            $table->integer('post_id');
            $table->string('level');
            $table->enum('sex',['male','female']);
            $table->text('program');
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
        Schema::dropIfExists('contestant');
    }
}
