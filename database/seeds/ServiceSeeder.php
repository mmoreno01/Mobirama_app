<?php

App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'servicio' => 'Fiscal',
        ]);

        DB::table('services')->insert([
            'servicio' => 'Payroll',
        ]);

        DB::table('services')->insert([
            'servicio' => 'contabilidad',
        ]);

    }
}
