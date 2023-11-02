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
        Schema::create('tbl_prueba_descripcion_cuenta', function (Blueprint $table) {
            $table->id();
            $table->integer('concepto_contable_id')->nullable();
            $table->string('descripcion', 100)->nullable();
            $table->bigInteger('cuenta')->default(0);
            $table->string('movimiento')->nullable();
            $table->integer('subtotal')->default(100);
            $table->double('iva', 8, 2)->nullable();
            $table->double('total', 8, 2)->nullable();
            $table->double('rte_fte', 8, 2)->default(2.5);
            $table->double('rte_iva', 8, 2)->default(15);
            $table->double('rte_ica', 8, 2)->default(3.5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_prueba_descripcion_cuenta');
    }
};
