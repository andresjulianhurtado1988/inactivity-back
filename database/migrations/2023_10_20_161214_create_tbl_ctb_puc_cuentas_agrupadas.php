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
        Schema::create('tbl_ctb_puc_cuentas_agrupadas', function (Blueprint $table) {
            $table->id();
            $table->integer('concepto_id')->nullable();
            $table->string('concepto', 100)->nullable();
            $table->bigInteger('puc_codigo_cuenta')->nullable();
            $table->string('naturaleza', 100)->nullable();
            $table->decimal('base_porcentaje_subtotal')->nullable();
            $table->integer('sociedad_id')->default(1);
            $table->integer('operacion_id')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_ctb_puc_cuentas_agrupadas');
    }
};
