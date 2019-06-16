<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWantedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wanteds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_id');
            $table->string('company_name');
            $table->string('contact_name');
            $table->string('contact_phone');
            $table->string('email');
            $table->string('fax');
            $table->string('address');
            $table->string('wanted_cat');
            $table->mediumText('content');
            $table->mediumText('other')->nullable();
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
        Schema::dropIfExists('wanteds');
    }
}
