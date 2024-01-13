<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fun_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('fun_id')->references('id')->on('fun')->onDelete('restrict');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');

            // Add unique constraint for interest_id and user_id
            $table->unique(['interest_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('choices');
    }
}
