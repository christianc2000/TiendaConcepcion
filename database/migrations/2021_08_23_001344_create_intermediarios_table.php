<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntermediariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intermediarios', function (Blueprint $table) {
            $table->unsignedBigInteger('persona_id');
            $table->text('descripcion')->nullable();
            $table->primary('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas')->OnDelete('cascade');
            $table->foreignId('proveedor_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();


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
        Schema::dropIfExists('intermediarios');
    }
}
