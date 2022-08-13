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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->integer('amount');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('branch_office_id');
            $table->unsignedBigInteger('status_id')->nullable();

            $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('set null')->onUpdate('set null');
            $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('set null')->onUpdate('set null');
            $table->foreign('branch_office_id')->references('id')->on('branch_offices')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')
                    ->onDelete('set null')->onUpdate('set null');
            
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
        Schema::dropIfExists('inventories');
    }
};
