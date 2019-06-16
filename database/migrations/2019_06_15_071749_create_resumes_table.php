<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->boolean('gender');
            $table->date('birthday');
            $table->string('tel');
            $table->string('phone');
            $table->string('email');
            $table->integer('height');
            $table->integer('weight');
            $table->string('address');
            $table->string('edu');
            $table->string('school');

            $table->mediumText('experience');
            $table->mediumText('skill');
            $table->mediumText('about')->nullable();
            
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
        Schema::dropIfExists('resumes');
    }
}
