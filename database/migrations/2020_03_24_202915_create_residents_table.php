<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('address_id');
            $table->integer('elector_number');
            $table->string('status');
            $table->string('title')->nullable();
            $table->string('firstname');
            $table->string('initials')->nullable();
            $table->string('surname');
            $table->string('email')->nullable();
            $table->string('home_telephone')->nullable();
            $table->string('mobile_telephone')->nullable();
            $table->timestamps();

            $table->foreign('address_id')->references('id')->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residents');
    }
}
