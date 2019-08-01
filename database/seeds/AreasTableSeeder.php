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
    DB::table('areas')->insert([
        'area' => 'Contabilidad o Administración', 
    ]);
    DB::table('areas')->insert([
        'area' => 'Jurídico', 
    ]);  
     DB::table('areas')->insert([
        'area' => 'SOFOM',     
    ]);
    DB::table('areas')->insert([
        'area' => 'Negocios Internacionales',
    ]);
    DB::table('areas')->insert([
        'area' => 'Ventas',
    ]);
    DB::table('areas')->insert([
        'area' => 'TI',
    ]);
    DB::table('areas')->insert([
        'area' => 'Recursos Humanos'
    ]);
    }
}
