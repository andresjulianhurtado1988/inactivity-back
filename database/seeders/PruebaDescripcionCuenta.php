<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PruebaDescripcionCuenta extends Seeder
{

    public function run(): void
    {
        DB::table('tbl_prueba_descripcion_cuenta')->insert(
            array(

                array(
                    'concepto_contable_id' => 140,
                    'descripcion' => 'SUBTOTAL CUENTA POR COBRAR: A TERCEROS',
                    'cuenta' => 138095,
                    'movimiento' => 'D',
                    'iva' => 0.0,
                    'total' => 100,
                ),

            )
        );
    }
}
