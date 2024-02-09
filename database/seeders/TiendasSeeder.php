<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tiendas')->insert(
            array(
                array(
                    'nombre' => 'Denarios',
                ),
                array(
                    'nombre' => 'San José',
                ),
                array(
                    'nombre' => 'La de Medellín',
                ),
                array(
                    'nombre' => 'La de Envigado',
                ),
                array(
                    'nombre' => 'Dos Quebradas',
                ),
                array(
                    'nombre' => 'La Oriental',
                ),
                array(
                    'nombre' => 'Villa Lía',
                ),

            )
        );
    }
}
