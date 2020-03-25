<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address_1');
            $table->string('address_2');
            $table->string('address_3');
            $table->string('address_4')->nullable();
            $table->string('address_5')->nullable();
            $table->string('address_6')->nullable();
            $table->string('address_7')->nullable();
            $table->string('address_8')->nullable();
            $table->string('address_9')->nullable();
            $table->string('postcode');
            $table->integer('resident_count')->default(0);
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
        Schema::dropIfExists('addresses');
    }
}
