<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraduationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("statusofgraduation");
            $table->string("typegraduation");
            $table->string("graduationorder");
            $table->string("graduationname");
            $table->string("bandmaincolor");
            $table->string("bandsecundarycolor");
            $table->integer("minimumlengthofstay");
            $table->integer("maximumlengthofstay");
            $table->string("canteach");
            $table->string("minimumfrequency");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graduations');
    }
}
