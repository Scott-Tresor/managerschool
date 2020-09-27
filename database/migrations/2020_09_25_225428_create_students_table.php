<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('classe_id');
            $table->unsignedInteger('option_id');
            $table->string('username');
            $table->string('postname');
            $table->string('firstname');
            $table->string('tutairename');
            $table->bigInteger('phonenumber');
            $table->date('age');
            $table->string('adresse');
            $table->string('nationality');
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
        Schema::dropIfExists('students');
    }
}
