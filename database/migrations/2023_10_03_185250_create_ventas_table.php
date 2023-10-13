<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad')->nullable();
            $table->unsignedBigInteger('vendedor_id')->default('0');
            $table->foreign('vendedor_id')->references('id')->on('vendedores')->onDelete('cascade')->nullable();
            $table->date('fecha_venta')->nullable();
            $table->string('dato_uno')->default('dato');
            $table->string('dato_dos')->default('dato');
            $table->string('dato_tres')->default('dato');
            $table->string('dato_cuatro')->default('dato');
            $table->string('dato_cinco')->default('dato');
            $table->string('dato_seis')->default('dato');
            $table->string('dato_siete')->default('dato');
            $table->string('dato_ocho')->default('dato');
            $table->string('dato_nueve')->default('dato');
            $table->integer('dato_diez')->default('120');
            $table->integer('dato_once')->default('200');
            $table->integer('dato_doce')->default('56');
            $table->integer('dato_agachese')->default('14');
            $table->integer('dato_catorce')->default('9');
            $table->integer('dato_quince')->default('890');
            $table->integer('dato_quince_mas_uno')->default('100');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};