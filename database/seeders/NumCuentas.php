<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NumCuentas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_cuentas_concepto')->insert(
            array(

                array(
                    'concepto_id' => 3,
                    'cuenta' => 110505,
                    'naturaleza' => 'C'
                ),

            )
        );
    }
}

