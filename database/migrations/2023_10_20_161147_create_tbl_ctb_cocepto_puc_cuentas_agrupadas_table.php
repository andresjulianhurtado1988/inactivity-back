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
        Schema::create('tbl_ctb_cocepto_puc_cuentas_agrupadas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('puc_codigo_cuenta')->nullable();
            $table->string('puc_nombre_cuenta', 100)->nullable();
            $table->integer('puc_nivel')->default(1);
            $table->integer('sociedad_id')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_ctb_cocepto_puc_cuentas_agrupadas');
    }
};


