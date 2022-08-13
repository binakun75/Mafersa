<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('dni_ruc')->nullable();
            $table->string("email")->unique()->default('cliente@gmail.com');
            $table->unsignedBigInteger('phone')->nullable();

            $table->unsignedBigInteger('address_id');
            $table->foreign("address_id")
                    ->references('id')->on('addresses')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                    
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
        Schema::dropIfExists('customers');
    }
};
