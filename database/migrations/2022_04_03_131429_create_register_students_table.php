<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('firstName');
            $table->string('lastName');
            $table->integer('fone');
            $table->string('address');
            $table->integer('zip');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('email');
            $table->string('sex');
            $table->date('birthDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_students');
    }
}
