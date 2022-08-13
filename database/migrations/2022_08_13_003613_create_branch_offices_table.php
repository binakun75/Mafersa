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
        Schema::create('branch_offices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('address_id')->unique();
            $table->unsignedBigInteger('staff_id')->nullable();
            
            $table->foreign('address_id')
                    ->references('id')->on('addresses')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
                    
            $table->foreign('staff_id')
                    ->references('id')->on('staffs')
                    ->onUpdate('set null')
                    ->onDelete('set null');
            
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
        Schema::dropIfExists('branch_offices');
    }
};
