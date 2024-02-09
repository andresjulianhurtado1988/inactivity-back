<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ventas')->insert(
            array(

                array(
                    'cantidad' => mt_rand(1, 15),
                    'vendedor_id' => 1,
                    'fecha_venta' => '2023-08-01'
                ),
                array(
                    'cantidad' => mt_rand(1, 15),
                    'vendedor_id' => 1,
                    'fecha_venta' => '2023-08-02'
                ),
                array(
                    'cantidad' => mt_rand(1, 15),
                    'vendedor_id' => 1,
                    'fecha_venta' => '2023-08-03'
                ),
                array(
                    'cantidad' => mt_rand(1, 15),
                    'vendedor_id' => 1,
                    'fecha_venta' => '2023-08-04'
                ),
                array(
                    'cantidad' => mt_rand(1, 15),
                    'vendedor_id' => 1,
                    'fecha_venta' => '2023-08-05'
                ),
                array(
                    'cantidad' => mt_rand(1, 15),
                    'vendedor_id' => 1,
                    'fecha_venta' => '2023-08-06'
                ),
                array(
                    'cantidad' => mt_rand(1, 15),
                    'vendedor_id' => 1,
                    'fecha_venta' => '2023-08-07'
                ),
                array(
                    'cantidad' => mt_rand(1, 15),
                    'vendedor_id' => 1,
                    'fecha_venta' => '2023-08-08'
                ),
                array(
                    'cantidad' => mt_rand(1, 15),
                    'vendedor_id' => 1,
                    'fecha_venta' => '2023-08-09'
                ),
                array(
                    'cantidad' => mt_rand(1, 15),
                    'vendedor_id' => 1,
                    'fecha_venta' => '2023-08-10'
                ),
                array(
                    'cantidad' => mt_rand(1, 15),
                    'vendedor_id' => 1,
                    'fecha_venta' => '2023-08-11'
                ),
                array(
                    'cantidad' => mt_rand(1, 15),
                    'vendedor_id' => 1,
                    'fecha_venta' => '2023-08-12'
                ),

                array(
                    'cantidad' => mt_rand(1, 15),
                    'vendedor_id' => 13,
                    'fecha_venta' => '2023-09-11'
                ),
            )
        );
    }
}
