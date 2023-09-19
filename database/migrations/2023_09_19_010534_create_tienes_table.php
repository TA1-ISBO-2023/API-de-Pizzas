<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTienesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tienes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("pizza_id");
            $table->unsignedBigInteger("ingrediente_id");
            $table->foreign("pizza_id")->references("id")->on("pizzas");
            $table->foreign("ingrediente_id")->references("id")->on("ingredientes");
            $table->unique(["pizza_id", "ingrediente_id"]);
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
        Schema::dropIfExists('tienes');
    }
}
