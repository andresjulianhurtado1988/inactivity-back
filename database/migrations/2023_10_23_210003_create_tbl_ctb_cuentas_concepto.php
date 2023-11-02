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
        Schema::create('tbl_cuentas_concepto', function (Blueprint $table) {
            $table->id();
            $table->integer('concepto_id')->nullable();
            $table->bigInteger('cuenta')->nullable();
            $table->string('naturaleza', 100)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_cuentas_concepto');
    }
};
