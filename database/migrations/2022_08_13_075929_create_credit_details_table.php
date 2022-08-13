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
        Schema::create('credit_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('credit_note_id')->nullable();
            $table->unsignedBigInteger('nro_vale')->unique()->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->decimal('amount', $precision = 10, $scale = 2);

            $table->foreign('credit_note_id')->references('id')->on('credit_notes')
            ->onUpdate('cascade')->onDelete('set null');

            $table->foreign('product_id')->references('id')->on('products')
            ->onUpdate('cascade')->onDelete('set null');
            
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
        Schema::dropIfExists('credit_details');
    }
};
