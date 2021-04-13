<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRakkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rakkas', function (Blueprint $table) {
            $table->id();
            $table->string('sarr');
            $table->integer('nombre');
            $table->unsignedBigInteger('nafila_id');
            $table->foreign('nafila_id')
            ->references('id')
            ->on('nafilas');
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
        Schema::dropIfExists('rakkas');
    }
}
