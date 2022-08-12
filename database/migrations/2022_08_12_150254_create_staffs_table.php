<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("dni")->unique();
            $table->unsignedBigInteger("phone")->nullable();
            $table->unsignedBigInteger("user_id")->unique();
            $table->unsignedBigInteger("address_id")->unique();

            $table->foreign("user_id")
                    ->references("id")
                    ->on("users")
                    ->onDelete("cascade")//onDelete('set null')
                    ->onUpdate('cascade'); 

            $table->foreign("address_id")
                    ->references("id")
                    ->on("addresses")
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

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
        Schema::dropIfExists('staffs');
    }
};
