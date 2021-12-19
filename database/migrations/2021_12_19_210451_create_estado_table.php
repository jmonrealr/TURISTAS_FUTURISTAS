<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('url_path')->nullable();
            $table->string('short_desc')->nullable();
            $table->text('description')->nullable();
            $table->integer('rating')->nullable();
            $table->text('sites')->nullable();
            $table->text('gastronomy')->nullable();
            $table->text('activity')->nullable();
            $table->string('weather')->nullable();
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
        Schema::dropIfExists('estado');
    }
}
