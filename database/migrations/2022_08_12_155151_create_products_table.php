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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->decimal('unit_price', $precision = 10, $scale = 2);
            $table->integer('score')->nullable();
            $table->string('measure');
            $table->unsignedBigInteger("category_id");
            $table->foreign("category_id")
                    ->references("id")
                    ->on('categories')
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
        Schema::dropIfExists('products');
    }
};
