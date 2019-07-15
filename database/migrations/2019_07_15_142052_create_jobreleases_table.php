<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobreleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobreleases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('location');
            $table->string('name');
            $table->string('holiday');
            $table->string('time');
            $table->string('welfare');
            $table->string('tel');
            $table->string('img')->nullable();
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
        Schema::dropIfExists('jobreleases');
    }
}
