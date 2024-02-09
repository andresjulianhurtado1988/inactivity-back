<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vendedores')->insert(
            array(
                array(
                    'nombre_vendedor' => 'Felipe Lotas',
                    'tienda_id' => mt_rand(1, 7),
                ),
                array(
                    'nombre_vendedor' => 'Elber Galarga',
                    'tienda_id' => mt_rand(1, 7),
                ),
                array(
                    'nombre_vendedor' => 'Inés Esario',
                    'tienda_id' => mt_rand(1, 7),
                ),
                array(
                    'nombre_vendedor' => 'Dolores Delano',
                    'tienda_id' => mt_rand(1, 7),
                ),
                array(
                    'nombre_vendedor' => 'Elva Ginón',
                    'tienda_id' => mt_rand(1, 7),
                ),
                array(
                    'nombre_vendedor' => 'Debora Teste',
                    'tienda_id' => mt_rand(1, 7),
                ),
                array(
                    'nombre_vendedor' => 'Alma Marcela Gozo',
                    'tienda_id' => mt_rand(1, 7),
                ),
                array(
                    'nombre_vendedor' => 'Ana Lisa Meltrozo',
                    'tienda_id' => mt_rand(1, 7),
                ),
                array(
                    'nombre_vendedor' => 'Pere Gil',
                    'tienda_id' => mt_rand(1, 7),
                ),
                array(
                    'nombre_vendedor' => 'Armando Bronca Segura',
                    'tienda_id' => mt_rand(1, 7),
                ),
                array(
                    'nombre_vendedor' => 'Milena Vergassola',
                    'tienda_id' => mt_rand(1, 7),
                ),
                array(
                    'nombre_vendedor' => 'Rita Putalova',
                    'tienda_id' => mt_rand(1, 7),
                ),
                array(
                    'nombre_vendedor' => 'Yamid Mohammadpourkarkaragh',
                    'tienda_id' => mt_rand(1, 7),
                ),
                array(
                    'nombre_vendedor' => 'Paco Cojes',
                    'tienda_id' => mt_rand(1, 7),
                ),
                array(
                    'nombre_vendedor' => 'Elvis Nieto',
                    'tienda_id' => mt_rand(1, 7),
                ),
                array(
                    'nombre_vendedor' => 'Rosa Melano',
                    'tienda_id' => mt_rand(1, 7),
                ),
            )
        );
    }
}
