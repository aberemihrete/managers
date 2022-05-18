<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
                $table->id();
                $table->string('Fname');
                $table->string('Lname');
                $table->string('sex');
                $table->string('address');
                $table->integer('phone');
             $table->timestamps();
             $table->unsignedBigInteger('Managers_id');
            $table->foreign('Managers_id')->references('id') ->on('Managers') ->onDelete('cascade');
        
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
