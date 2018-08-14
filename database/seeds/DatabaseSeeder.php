<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Metodo para eliminar datos al hacer refresh seeder
        $this->truncateTables([
                'services'
        ]);

        // $this->call(UsersTableSeeder::class);
            $this->call(ServiceSeeder::class);
    }
    
    protected function truncateTables(array $tables)
        {
            foreach($tables as $table){
                DB::table($table)->truncate();
            }
        }
}

