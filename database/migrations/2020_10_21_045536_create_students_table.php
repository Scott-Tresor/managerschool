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
            $table->string('username');
            $table->string('prenom');
            $table->string('sexe')->default('M');
            $table->dateTime('birthdays');
            $table->string('nationality');
            $table->string('phoneNumber');
            $table->string('adress');
            $table->string('ville');
            $table->string('school');
            $table->string('province');
            $table->integer('codeExetat');
            $table->string('option');
            $table->dateTime('annee');
            $table->integer('pourcent');
            $table->string('Department');
            $table->string('Depart');
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
