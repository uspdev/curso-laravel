<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LivroEdmar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livro_edmars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo');
            $table->string('autor')->nullable();
            $table->string('isbn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livro_edmars');
    }
}
