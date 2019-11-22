<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert(['nombre_area' => 'Gerencia']);
		DB::table('areas')->insert(['nombre_area' => 'Recursos Humanos']);
		DB::table('areas')->insert(['nombre_area' => 'Sistemas']);
		DB::table('areas')->insert(['nombre_area' => 'Contabilidad']);
    }
}
