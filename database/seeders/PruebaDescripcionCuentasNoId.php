<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PruebaDescripcionCuentasNoId extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_prueba_descripcion_cuenta')->insert(
            array(

                array(
                    'concepto_contable_id' => 0,
                    'descripcion' => 'TOTAL ABONOS PLAN SEPARE',
                    'cuenta' => 110505,
                    'movimiento' => 'C'
                ),


            )
        );
    }
}
