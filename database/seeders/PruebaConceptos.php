<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PruebaConceptos extends Seeder
{

    public function run(): void
    {
        DB::table('tbl_prueba_conceptos')->insert(
            array(
                array(
                    'id_concepto_contable' => 3,
                    'concepto' => 'ARRENDMTO: PROP RAIZ(LOCALES) '
                ),

            )
        );

    }
}
