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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->decimal('height', 5, 2);
            $table->decimal('wheight', 6, 2);
            $table->text('background');
            $table->string('image');
            $table->tinyInteger('armor_class')->unsigned();
            $table->tinyInteger('for')->unsigned();
            $table->tinyInteger('des')->unsigned();
            $table->tinyInteger('cos')->unsigned();
            $table->tinyInteger('int')->unsigned();
            $table->tinyInteger('sag')->unsigned();
            $table->tinyInteger('car')->unsigned();
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
        Schema::dropIfExists('characters');
    }
};
